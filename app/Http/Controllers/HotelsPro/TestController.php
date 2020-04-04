<?php

namespace App\Http\Controllers\HotelsPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HotelsProApi;

class TestController extends Controller
{    
    protected $_hotelsProApi;

    public function __construct(HotelsProApi $hotelsProApi) {
        $this->_hotelsProApi = $hotelsProApi;
    }

    public function search() {
        
        $url  = "/search/?pax=3&checkout=2020-04-25&checkin=2020-04-20&destination_code=1230d&client_nationality=ph&currency=EUR";
        $data = '';
        $code = '';
        $method = "get";

        $val = $this->_hotelsProApi->hotelsProApi($method,$url,$data,$code);
        print_r($val);die;
    }

    public function hotelAvailability() {

        $search = "20200420_5_3_1_176_zenfc1919363aed47709a84a5256ddb8c0e_1585971438";
        $hotel  = "11ca56";

        $url  = "/hotel-availability/?search_code=$search&hotel_code=$hotel";
        $data = '';
        $code = '';
        $method = "get";

        $val = $this->_hotelsProApi->hotelsProApi($method,$url,$data,$code);
        print_r($val);die;

    }

    public function provision() {

        $code = "11ca56_54082556079941_2_68-0_2_2_0_1_732241520_0_3-6-0-15347488372721476021_17-100_176_2.20200420_5_3_1_176_zenfc1919363aed47709a84a5256ddb8c0e_158597143800";

        $url  = "/provision/$code";
        $data = '';
        $code = '';
        $method = "post";

        $val = $this->_hotelsProApi->hotelsProApi($method,$url,$data,$code);
        print_r($val);die;

    }
}
