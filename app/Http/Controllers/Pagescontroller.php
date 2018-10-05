<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Support\Facades\Input;

Class PagesController extends Controller{

	public function getindex(){

		return view('pages.welcome');
	} 

	public function getabout(){
		//$data = ["title" => "hello", "description" => "test test test"];

					//OR below is the same for creating array.

		//$data = array("title" => "hello", "description" => "test test test");


		return view('pages.about');
		
	} 

	public function getcontact(){
		return view('pages.contact');

	}
	public function postcontact(){

		//USING INPUT (CHECK POSTCONTROLLER FOR $REQUEST)
 
        $anything = new Contact;
        $anything->email/* this (name)ie email represents migration column name*/ = Input::get('email'); // this (name)ie email, is taken from the form-input name
        $anything->subject=  Input::get('subject');        
        $anything->message=  Input::get('message');
       
       
        $anything->save();
		return view('pages.about');
	}

	
}












