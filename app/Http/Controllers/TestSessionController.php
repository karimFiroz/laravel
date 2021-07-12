<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TestSessionController extends Controller
{
  


    public function set(Request $request)
    {
$request->session()->put('name','Abdul Karim'); 

$request->session()->put('email','karim.mdkarim.firoz4@gmail.com');

Session::put('phone','+8801818830761');
    }




public function getData(Request $request)
    {
echo  $request->session()->get('name','No session present!!');

echo '<br />'; 
echo  $request->session()->get('email'); 

//echo '<br />'; 
//echo  $request->session()->get('phone'); 

echo '<br />'; 
echo  Session::get('phone'); 
    }

   


public function destroy(Request $request)
    {
        $request->session()->flush();
    }


public function forget(Request $request)
    {
        $request->session()->forget('email');
    }








    public function index()
    {
  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

 
}
