<?php

namespace App\Http\Controllers\HotelsPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HotelsProApi;
use Illuminate\Support\Facades\Redis;
use App\Models\Errors;
use App\Models\NoReturn;
use DB;

class HotelAvailability extends Controller
{

    protected $_api;
    public function __construct(HotelsProApi $hotelsProApi) {
        $this->_api = $hotelsProApi;
    }

    public function results(Request $request) {

        $key  = $request->input('key');
        $search_code = decrypt($request->input('code'));
        $hotel_code  = decrypt($request->input('hotel_code'));
        
        $url  = "/hotel-availability/?search_code=$search_code&hotel_code=$hotel_code";
        $data = '';
        $code = '';
        $method = "get";

        $val = $this->_api->hotelsProApi($method,$url,$data,$code,$key,$model = 'HotelAvailabilityApi');

        if($val['check']['notif']) {

            $msg = $val['check']['msg'];
            
            return response()->json(base64_encode(json_encode(['key'=> $key , 'notif' => 1 ,'msg' => $msg])));

        } else {
            
            Redis::set("hotel-availability-$key",json_encode($val),'EX', 3600 * 7);

            return response()->json(base64_encode(json_encode(['key'=> $key , 'notif' => 0 , 'msg' => ''])));

        }

    }

    public function hotelDetails(Request $request) {

    }


}
