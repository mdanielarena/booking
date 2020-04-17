<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
	protected function authenticate(Request $request)
    {
        $this->validate($request, [
            'signIn_email' => 'required|string',
            'signIn_password' => 'required|string',
        ]);
		
		if (Auth::attempt(['email' => $request->input('signIn_email'), 'password' => $request->input('signIn_password')]))
        {
			$request->session()->regenerate();
			$data = $request->session()->all();
			
			$mail_data['email']= array($request->input('signIn_email'));
			$mail_data['mail_view'] = 'mails.login';
            $mail_data['subject']   = 'Login Notification';
			//$this->send_mail($mail_data);
            return response()->json(base64_encode(json_encode(['succ'=>1])));
        }else{
			return response()->json(base64_encode(json_encode(['succ'=>0])));
		}
		
    }
	
	public function signout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        Auth::logout();

        return redirect()->intended('/');
    }
	
	
}
