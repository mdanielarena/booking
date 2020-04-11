<?php

namespace App\Http\Controllers\HotelsPro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HotelsProApi;
use App\Models\Destinations;


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

        print_r($request->all());die;

    }
}
