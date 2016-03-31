<?php

namespace Abhijeet\Contact\Controllers;

use App\Http\Controllers\Controller;
use Enchance\Contact\Facade\Contact;
use Validator;
use Request;


/****************************************************************
*Your controller for contact us package
****************************************************************/

class ContactController extends Controller {

    public function showContactForm() {
    	return view('contact::contact');
    }

	public function saveContactForm(Request $req) {
		$input = Request::all();
		$rules = [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required|min:10'
		];
		$message = [
			'name.required' => 'Please enter your name',
			'email.required' => 'Please enter your email',
			'email.email' => 'Please enter valid email',
			'message.required' => 'Please enter your message',
			'message.min' => 'Message should contain minimum :min characters'
		];
		$valid = \Validator::make($input, $rules, $message);
		if($valid->fails()){
			$error = $valid->messages();
			return back()->with('errors', $error)->withInput();
		}
		else{
			$sub = !empty($input['subject'])?$input['subject']:'General Query';
			$data = [
			 	'name'=> $input['name'],
			 	'msg' => $input['message'],
			 	'sub' => $sub
			];
			\Mail::send('emails.mail', $data, function($message) use ($input, $sub){
	            $message->to('abhijeet@ambab.com')
	                    ->from($input['email'])
	                    ->subject($sub);
	        });
	        return redirect('/contactus/contact')->with('message', 'Your query is reached to us. We will react on this as soon as possible');
		}
    }
}