<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\cr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
    }


  public function store(Request $request)
    {
       $data=$request->validate([
'name'=>'required|string|min:3',
'email'=>'required|email|unique:users',
//'password'=>'required|min:6'
        ]);
$data['password']=Hash::make($request->get('password'));
  if(User::create($data)){
        return redirect()->route('signin');
    }else{
         return redirect()->route('signup');
    }
return $request->all();
    }

 
  
 }




