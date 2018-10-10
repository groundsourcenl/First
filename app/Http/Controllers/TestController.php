<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Test;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test_index_list = Test::all();

        //return view('test.index', compact('test_index_list'));

        return view('test.index', compact('test_index_list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'post_title' => 'required',
                'article' => 'required|min:5|max:700',
                               
            ]);


        $testpost = new Test;
        $testpost->post_title= $request->post_title;
        $testpost->article= $request->article;
        
        $testpost->save();

        Session::flash('success',' Test Post submitted Sucessfully!!');

        return redirect()->route('test.show', $testpost->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kilam = Test::find($id);
    
                        //PASSING DATA TO VIEW

        return view('test.show', compact('kilam')); //EASIEST USE THIS METHOD FOR PASSING DATA. The same $kilam will be passed/accessed in View page. Here ('test.show')

                        //OR

        //return view('test.show')->withTestshow($kilam);
        //return view('test.show')->with('testshow',$kilam);

        //Note: if you want to CHANGE the variable name which is to be access IN the view page (Eg. here test.show page) 
 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
