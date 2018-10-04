<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getcreate(){
        return view('pages.create');

    }

    public function postcreate(){

        $createpost = new Post;
        $createpost->postTitle/* this (name)ie email represents migration column name*/ = Input::get('postTitle'); // this (name)ie email, is taken from the form-input name
        $createpost->subject=  Input::get('subject');        
        $createpost->article=  Input::get('article');
        $createpost->author= Input::get('author');
        $createpost->authorEmail= Input::get('authorEmail');
     
        $createpost->save();
        return view('pages.create');

    }
}
