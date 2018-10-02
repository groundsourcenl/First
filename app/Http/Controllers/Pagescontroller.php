<?php

namespace App\Http\Controllers;

Class PagesController extends Controller{

	public function getIndex(){

		return view('pages.welcome');
	} 

	public function getAbout(){
		//$data = ["title" => "hello", "description" => "test test test"];

					//OR below is the same for creating array.

		//$data = array("title" => "hello", "description" => "test test test");


		return view('pages.about');
		
	} 

	public function getContact(){
		return view('pages.contact');
	} 
}
