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
  
    public function store(Request $request)
    {
        //Check validation
        $this->validate($request,[
'name'=>'required|string|max:15',
'password'=>'required|min:6'

        ]);

        $user=new User;
        $user->admin_id=$request->admin_id;
        $user->group_id=$request->group_id;
        $user->group=$request->group;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->save();
        return redirect()->route('users');
    }


    public function edit($id)
    {
       $users= User::find($id);

   return view('user.edit')->with('user',$users);
    }


    public function update(Request $request, $id)
    {
        $user=User::find($id);
        
         $user->admin_id=$request->admin_id;
        $user->group_id=$request->group_id;
        $user->group=$request->group;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->phone=$request->phone;
        $user->address=$request->address;
       $user->save();
       return redirect()->route('users');
    }
/*************************
|route('users_update_name')
|user single update
|function--updateName
**********************/
   public function updateName(Request $request,$id)
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
