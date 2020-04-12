<?php

namespace App\Http\Controllers\HotelsPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HotelsProApi;
use App\Models\Destinations;
use App\Models\SearchKey;
use Illuminate\Support\Facades\Redis;
use Ramsey\Uuid\Uuid;


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
        $val = $this->_hotelspro->hotelsProApi($method,$url,$data,$code);

        Redis::set("search-results-$key",json_encode($val),'EX', 3600 * 7);
        
        return redirect("/search-results?key=$key");

    }

    public function searchResults(Request $request) {
        return view('pages.search_results');
    }
}
