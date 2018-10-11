<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

Class PagesController extends Controller{

	public function getwelcome(){

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
	public function postcontact(Request $request){

		//USING INPUT (CHECK POSTCONTROLLER FOR $REQUEST) coment out use Illuminate\Support\Facades\Input; if not using input method
 
		// validation

		$this->validate($request,[
                'email' => 'required',
                'subject' => 'required|min:5|max:35',
                'message' => 'required',
                                
            ]);

		//Inserting data into DB with $request

		$anything = new Contact;
		$anything->email= $request->email;
        $anything->subject= $request->subject;        
        $anything->message= $request->message;
       

        /*

			If validation uses $request then the Inserting into DB also recomendated use $request and not Input method
        $anything = new Contact;
        $anything->email= Input::get('email');
        $anything->subject=  Input::get('subject');       
        $anything->message=  Input::get('message');*/
              
        $anything->save();

        Session::flash('success',' Your Contact Successfully saved');

		return view('pages.contact');

	}

	public function getall_contact(){
		$show_contact_inserted_list = Contact::all();
		return view('pages.all_contact', compact('show_contact_inserted_list'));
	} 
	
}












