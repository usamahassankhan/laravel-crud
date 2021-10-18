<?php

namespace App\Http\Controllers;
use App\Models\resmodel;
use Illuminate\Http\Request;

class Res extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
            $alldata=resmodel::all();
            return view('home.index',compact('alldata'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_data = new resmodel();
        $name = $request->name;
        $title = $request->title;
       
        $user_data->name = $name;
        $user_data->title = $title;
      
        $user_data->save();
        return redirect('home')  ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=resmodel::find($id);
        return view('home.edit',compact('data'));
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
        // die("fhyfyf");
        $data = resmodel::find($id);
        $data->name = $request->name;
        $data->title = $request->title;
      
        $data->save();
        return redirect('/home');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $data=resmodel::find($id);
      $data->delete();
      return redirect('/home');
    }
}
