<?php

namespace App\Http\Controllers\HotelsPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HotelsProApi;
use App\Models\Destinations;
use App\Models\Hotels;
use App\Models\SearchKey;
use Illuminate\Support\Facades\Redis;
use Ramsey\Uuid\Uuid;
use DB;
use Carbon\Carbon;

class Search extends Controller
{
    protected $_hotelspro;

    public function __construct(HotelsProApi $hotelspro)
    {
        $this->_hotelspro = $hotelspro;    
    }

    public function searchData(Request $request) {

        $data = $request->input('data');
        $val  = Destinations::where('name','like',"%$data%")->first();
        
        return ($val) ? response()->json(base64_encode(json_encode(['succ'=>1,'val'=>$val]))) 
                      : response()->json(base64_encode(json_encode(['succ'=>0,'val'=>$val])));
    }

    public function searchPost(Request $request) {

        $code = $request->input('filterValue');
        $exp_checkIn  = explode('/',$request->input('checkIn'));
        $exp_checkOut = explode('/',$request->input('checkOut'));
        $checkIn  = $exp_checkIn[2]."-".$exp_checkIn[0]."-".$exp_checkIn[1];
        $checkOut = $exp_checkOut[2]."-".$exp_checkOut[0]."-".$exp_checkOut[1];
        $pax  = "pax=3";
        $data = '';
        $method = "get";
        $key = Uuid::uuid1()->toString();

        $this->setCookie("checkIn",$request->input('checkIn'));
        $this->setCookie("checkOut",$request->input('checkOut'));

        SearchKey::create([
            'key'  => $key,
            'code' => $code,
            'name' => $_COOKIE['searchInput'],
            'type' => 'destination',
            'pax'  => $pax,
            'checkin' => $_COOKIE['checkIn'],
            'checkout'=> $_COOKIE['checkOut'],
        ]);

        $url = "/search/?$pax&checkout=$checkOut&checkin=$checkIn&destination_code=$code&client_nationality=ph&currency=EUR";
        $val = $this->_hotelspro->hotelsProApi($method,$url,$data,$code,$key,$model = '\App\Models\SearchApi');
         
        if($val['check']['notif']) {

            $msg = $val['check']['msg'];
            
            return redirect("/notification?key=$key&data=$msg");

        } else {
            
            Redis::set("search-results-$key",json_encode($val),'EX', 3600 * 7);

            return redirect("/search-results?key=$key");

        }
        
    }

    public function searchResults(Request $request) {

        $key = $request->input('key');

        if(Redis::get("search-results-$key")) {
            
            $data = json_decode(Redis::get("search-results-".$key),true);
            $destination = DB::table('search_keys')->select('name')->where('key',$key)->first();
            $data['destination'] = $destination->name;
            
            $results = $data['results'];
            
            for($x = 0; $x < count($data['results']);$x++) {
                
                $checkHotel = DB::table('hotels')->select('name','stars','address','images')
                                ->where('code',$data['results'][$x]['hotel_code'])->first();

                if($checkHotel) {

                   $value = json_decode($checkHotel->images);
                   //not yet inserted the old consumer file,just do the checking for the meantime
                   $data['results'][$x]['hotel_info'] = $checkHotel; 
                   //choose if ->large/mid/small
                   $data['results'][$x]['hotel_info']->images = isset($value[0]->thumbnail_images) ? $value[0]->thumbnail_images : '';
                   
                }                
                
            }
            
            Redis::set("search-results-display-$key",json_encode($data),'EX', 3600 * 7);

            return view('pages.search_results')->with(['value' => json_decode(Redis::get("search-results-display-$key"),true),'key' => $key]);
        }

    }
}
