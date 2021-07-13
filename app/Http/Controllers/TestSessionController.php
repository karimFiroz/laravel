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

session(['address'=>'E/M-04,Firozshah East,Ctg.']);
return view('TestSession.set-session');
    }




public function getData(Request $request)
    {
echo 'Name:'.' '. $request->session()->get('name','No session present!!');

echo '<br />'; 
echo 'Email:'.' '. $request->session()->get('email'); 

echo '<br />'; 
echo 'Address:'.' '. $request->session()->get('address'); 

echo '<br />'; 
echo 'Phone:'.' '. Session::get('phone');
return view('TestSession.get-session');

    }

   
//permanent delete all

public function destroy(Request $request)
    {
        $request->session()->flush();
        return view('TestSession.delete-session');
    }





public function forget(Request $request)
    {
        $request->session()->forget('email');
        return view('TestSession.forget-session');
    }


    public function index(Request $request)
    {
        echo '<pre>';
 // var_dump($request->session()->all());
  print_r(Session::all());
   
    }

    public function check(Request $request)
    {
       // if($request->session()->has('name')){
       //  echo 'Name is:'. Session::get('name');


        // if(Session::has('name')){
        //     echo 'Name is:'. Session::get('name');
        // }

         if(Session::exists('name')){
            echo 'Name is:'. Session::get('name');
        }


       }
    

 


    //temporary view message
  public function flash(Request $request)
    {
    $request->session()->flash('message','I am temporary message. refresh me I am gone!!');
     return 'Temporary message Created successfully.Go back!!';
    }




  public function showMessage(Request $request)
    {
     echo $request->session()->get('message');
     return 'Go back!!';
    }




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
