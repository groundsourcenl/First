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
        $test_index = Test::all();

        //return view('test.index', compact('test_index'));

        return view('test.index', compact('test_index')); // Why in URL typing only test open's up test.index??
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
                'article' => 'required|min:5',
                               
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

        return view('test.show', compact('kilam')); 
        //Above is the EASIEST USE THIS METHOD FOR PASSING DATA. The same
        // $kilam will be passed/accessed in View page ie, ('test.show') as $kilam.

                        //OR

        //return view('test.show')->withTestshow($kilam);
        //return view('test.show')->with('testshow',$kilam);

        //Note: if you want to CHANGE the variable name which is to be access IN the 
        //view page (Eg. here test.show page) the variable name passed to view page is $testshow. 
 

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sinsin =Test::find($id);
        return view('test.testedit', compact('sinsin'));

        //here the ('test.testedit') is using URL so, the testedit should name match the view page testedit
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
       $this->validate($request,[
                'post_title' => 'required',
                'article' => 'required|min:5|max:700',
                               
            ]);


        $testpost = Test::find($id);
        $testpost->post_title= $request->post_title;
        $testpost->article= $request->article;
        
        $testpost->save();

        Session::flash('success',' Test Post submitted Sucessfully!!');

        return redirect()->route('test.show', $testpost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $madan = Test::find($id);
        $madan->delete();
        return redirect()->route('test.index');
       
    }
}
