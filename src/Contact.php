<?php
namespace Abhijeet\Contact;

class Contact{
	public function sayHello(){
		return trans('contact::messages.greeting');
	}

	public function sayBye(){
		return config('contact.env');
		//return "Bye";
	}
}