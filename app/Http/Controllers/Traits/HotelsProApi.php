<?php

namespace App\Http\Controllers\Traits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


trait hpApi {

    protected $h_url;
    protected $h_u;
    protected $h_p;

    public function hotelsProApi($method,$url,$data,$code) {

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
            return $val;
    }

}

class HotelsProApi extends Controller
{
    use hpApi;
}
