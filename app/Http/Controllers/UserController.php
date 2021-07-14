<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{


/****************
|route('users')
|view all users
|function-----users
******************/
    public function index(){
    $users=User::all();
      return view('user.index',['users'=>$users]);
    }

/********************
|route('users_create')
|user create
|function---create
******************/

    public function create(){

        return view('user.register');
    }
/******************
|route('users_add')
|user store
|function-----store
********************/
  
 public function store(Request $request){

$data=$request->validate([
'name'=>'required|string|min:3',
'email'=>'required|email|unique:users',
'password'=>'required|min:6'
        ]);

  if(User::create($data)){
        return redirect()->route('users');
    }else{
         return redirect()->route('create');
    }
return $request->all();
    }

  

/********************
|route('users_update')
|user update
|function-----update
*******************/
    public function update(Request $request, $id)
    {
       
    }
/*************************
|route('users_update_name')
|user single update
|function--updateName
**********************/
   public function updateName(Request $request,$id)
    {
    
    }
/********************
|route('users_edit')
|users edit
|function---edit
*******************/
    public function edit($id)
    {
       
    }

/**********************
|route('users_delete')
|users delete
|function---delete
*****************/
     
    public function delete($id)
    {
       
            $user=User::find($id);
    
            $user->delete($id);
           return redirect()->route('users');
    }






       public function show($id, $email = 'mamun@gmail.com')
    {
        return $id . ' ' . $email;
    }


    public function display($id)
    {
        return 'Display ' . $id;
    }
}
