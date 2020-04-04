<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    
    public function __construct() {
        $this->middleware('guest');
    }
 
	public function register(Request $request)
    {	
		$this->validate($request,[
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
			'password_confirmation' => 'required|string|min:6'
		]);
		
		$user = DB::table('users')->insert([
			'name'=>$request->input('email'),
			'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
		]);
        
        return response()->json(base64_encode(json_encode(['succ'=>1])));
		
    }
      
}
