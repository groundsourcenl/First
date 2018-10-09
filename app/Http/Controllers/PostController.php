<?php

namespace App\Http\Controllers;
use App\Post;
//use DB;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getcreate(){
        return view('pages.create');

    }

    public function postcreate(Request $request){
        
        //if using input class then there will be empty  in function postcreate arguement()
        
        //$createpost = new Post;
        //$createpost->post_title/* this (name)ie email represents migration column name*/ = Input::get('post_title'); // this (name)ie email, is taken from the form-input name
       // $createpost->subject=  Input::get('subject');        
       // $createpost->article=  Input::get('article');
        //$createpost->author= Input::get('author');
        //$createpost->author_email= Input::get('author_email');
     
        //$createpost->save();

        $this->validate($request,[
                'post_title' => 'required',
                'subject' => 'required|min:5|max:35',
                'article' => 'required|min:5|max:700',
                'author' => 'required',
                'author_email' => 'required|email',
                
            ]);


        $createpost = new Post;
        $createpost->post_title= $request->post_title;
        $createpost->subject= $request->subject;        
        $createpost->article= $request->article;
        $createpost->author= $request->author;
        $createpost->author_email= $request->author_email;

        $createpost->save();

        Session::flash('success',' Post successfully Submitted');


        /* insert using $request class but WITHOUT using MODEL

        $data = array(
                'post_title'   => $request->input ('post_title'),
                'subject'    => $request->input ('subject'),
                'article' => $request->input ('article'),
                'author'        => $request->input ('author'),
                'author_email'        => $request->input ('author_email'),
                
            );

        DB::table ('posts')->insert($data);*/

        return view('pages.create');



    }
    public function getindex(){

        $index_list = Post::all();

        return view('pages.index', compact('index_list'));

    }

}
