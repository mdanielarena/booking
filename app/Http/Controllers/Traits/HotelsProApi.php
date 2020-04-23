<?php

namespace App\Http\Controllers\Traits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hotels;
use App\Models\SearchKey;
use App\Models\Errors;
use App\Models\NoReturn;
use App\Models\SearchApi;
use App\Models\HotelAvailabilityApi;


trait hpApi {

    protected $h_url;
    protected $h_u;
    protected $h_p;

    public function hotelsProApi($method,$url,$data,$code,$key,$model) {

        $this->h_u = config('app.h_u');
        $this->h_p = config('app.h_p');
        $this->h_url = config('app.h_url');

        $init = ($method === 'post') ? $this->h_url.$url.$code : $this->h_url.$url;
        
        $ch = curl_init($init);
        
        if($method === 'post') {
            curl_setopt($ch, CURLOPT_POST, 1); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_USERPWD, $this->h_u.":".$this->h_p);
            $response = curl_exec($ch);
            curl_close($ch);
            $val = json_decode($response,true);

            $check = $this->checkNotifications($val,$key,$model);
            $val['check'] = $check;

            return $val;
    }

    public function checkNotifications($val,$key,$model) {

        $array = [];

        if(isset($val['error_code'])) {

            $array['notif'] = 1;
            $array['msg'] = encrypt($val['detail']);
            Errors::create(['key'=> $key,'methods'=> 'search','results'=> json_encode($val)]);
            
        } else {

            if(!$val['count']) {

                $array['notif'] = 1;
                $array['msg'] = encrypt('No Count!');
                Errors::create(['key'=> $key,'methods'=> 'search','results'=> json_encode($val)]);   

            } else {

                $array['notif'] = 0;
                $array['msg'] = '';
                $model::create(['key' => $key,'results' => json_encode($val)]);

            }

        }

        return $array;
    }

}

class HotelsProApi extends Controller
{
    use hpApi;

    public function showNotificationView(Request $request) {
        
        return view('pages.notification');

    }
}
