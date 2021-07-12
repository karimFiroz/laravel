<?php

use App\Models\Group;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Post_tag;
use App\Models\Customer;
use App\Models\Address;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestSessionController;
/*---------------------------------------------*/
Route::get('/', function() {return view('welcome'); });
/*
|------------------------
|Route::middleware('test')->group(function() {  });
|-------------------------------*/
Route::get('set-session', [TestSessionController::class, 'set'])->name('set-session');
Route::get('get-session', [TestSessionController::class, 'getData'])->name('get-session');
Route::get('delete-session', [TestSessionController::class, 'destroy'])->name('delete-session');
Route::get('forget-session', [TestSessionController::class, 'forget'])->name('forget-session');



Route::get('users', [UserController::class, 'index'])->name('users');
Route::get('users/create', [UserController::class, 'create'])->name('create');
Route::post('users', [UserController::class, 'store']);





Route::get('posts',  [PostController::class, 'index'])->name('posts');


/*--------------------------------------------
Route::get('sync', function() {
  $post = Post::find(1);
$post->tags()->attach([1,2,3]);

return 'Attached';
});

Route::get('detach', function() {
  $post = Post::find(1);
$post->tags()->detach();
 return 'Detached';
});
----------------------------------------------
post.php
//many-to-many relation Tag.php model and junction table post_tags
    public function tags(){

   return $this->belongsToMany(Tag::class,'post_tags');
    }
-------------------------------------------------------
post.php
// one-to-many-inverse relation
    public function user(){

      return $this->belongsTo(User::class);
    }
    -------------------------------------------
user.php
//one-to-many relation
    public function posts(){

return $this->hasMany(Post::class);
    }
    ------------------------------------------
Route::get('sync', function() {
  $post = Post::find(1);
$post->tags()->attach([1,2,3]);

return 'Attached';
});
-----------------------------------
Route::get('attach', function() {
  $post = Post::find(1);
$post->tags()->attach([1,2]);

return 'Attached';
});
------------------------------------------
address.php
//one-to-one-inverse relation
   public function user(){

    return $this->belongsTo(User::class);
   }
user.php
//for one-to-one relation name singular ie, address
      public function address(){

return $this->hasOne(Address::class);
    }
    ------------------------------------------
Route::get('detach', function() {
  $post = Post::find(1);
$post->tags()->detach();
 return 'Detached';
});
   ----------------------------------------------------
   class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','user_id','description','status'];

    public function user(){

      return $this->belongsTo(User::class);
    }
}
-----------------------------------------------------------------    
   Route::get('one-to-many-inverse', function() {
  echo '<pre>';
  $post = Post::find(1);

    echo $post->title . '<br/>';
    echo '<pree>';
  echo $post->user->name . '<br/>';
  print_r($post->user);
});
-------------------------------------------------------
   Route::get('one-to-many', function() {
  $user = User::find(1);
  echo $user->name . '<br/>';
  
  foreach ($user->posts as $post) {
    echo $post->title . '<br/>';
  }
});

Route::get('one-to-many-inverse', function() {
  $post = Post::find(1);

    echo $post->title . '<br/>';
  
});
-----------------------------------------------------
   Route::get('one-to-many', function() {
  $user = User::find(1);
  echo $user->name . '<br/>';
  
  foreach ($user->posts as $post) {
    echo $post->title . '<br/>';
  }
});
---------------------------------------

Route::get('one-to-one-inverse', function() {
  $address = Address::findOrFail(1);
  echo $address->city . '<br/>';
  echo $address->user->name . '<br/>';

  dd($address->user);
});
------------------------------------------------------
   Address.php
 public function user(){

    return $this->belongsTo(User::class);
   }



Route::get('one-to-one-inverse', function() {
  $address = Address::find(2);
  echo $address->city . '<br/>';
  echo $address->user->name . '<br/>';

  dd($address->user);
});

 
/*
|------------------------
| collect all data
|------------------------------
User.php
   public function address(){

return $this->hasOne(Address::class);
    }
    ----------------------------------
class Address extends Model
{
    use HasFactory;
     protected $table='addresses';
    protected $fillable=['user_id','state','city','country'];
   
}
Route::get('one-to-one', function() {
  echo '<pre>';
$user=User::find(1);
$address=Address::where('user_id',$user->id)->first();
echo $user->name.'<br>';
echo $user->email.'<br>';
echo $user->address->country.'<br>';
//var_dump($user->address->state);
});
Route::get('one-to-one', function() {
  echo '<pre>';
$user=User::find(1);
echo $user->name.'<br>';
echo $user->email.'<br>';
echo $user->address->country.'<br>';
//var_dump($user->address->state);
});
---------------------------------- 
    public function index()
    {
        echo '<pre>';
  Post::where('status', 0)->delete();
  print_r($post);
  return 'Post Deleted';
    }
    ----------------------------------------
Route::get('delete-post', function() {
  // $post = Post::findOrFail(4);
  // $post->delete();

  // Post::destroy([6, 7, 8]);

  Post::where('status', 0)->delete();
  return 'Post Deleted';
});
--------------------------------------------------------
Route::get('first-or-create', function() {
  // $post = Post::firstOrCreate(['title' => 'Hello post']);
  $post = Post::firstOrNew([
    'title' => 'My new post',
    'user_id'=>25,
    'description'=> 'Hi Ranu',
    'status'=>0
]);
  $post->save();
  return 'Post Created';
});
---------------------------------------------------
    public function index()
    {
        echo '<pre>';
  $post = Post::find(3);
  $post->title = 'This is new title';
  $post->status = 0;
  $post->save();
  return 'Post updated';
    }
    -------------------------------------
Route::get('post-update', function() {
  $post = Post::find(2);
  $post->title = 'This is new title';
  $post->status = 0;
  $post->save();
  return 'Post updated';
});
--------------------------------------------

    public function index()
    {
        echo '<pre>';
  $post = new Post();
  $post->title = 'This is title';
  $post->description = 'This is description';
  $post->user_id = 1;
  $post->status = 1;
  $post->save();
  return 'Post Added';
    }
    -------------------------------------
Route::get('post-add', function() {
    
  $post = new Post();
  $post->title = 'This is title';
  $post->description = 'This is description';
  $post->user_id = 1;
  $post->status = 1;
  $post->save();
  return 'Post Added';
});
---------------------------------------------
public function index()
    {
        echo '<pre>';
  $posts = Post::where('status', 1)->firstOrFail(); 

  dd($posts);
    }
    Route::get('index', [PostController::class, 'index']);
    ---------------------------------------
    public function index($id)
    {
        echo '<pre>';
      $posts = Post::findOrFail($id);   

    dd($posts);
    }
    Route::get('index/{id}', [PostController::class, 'index']);
    ------------------------------------
 public function customers()
    {
return DB::table('customers')->get();   
    }
    or
     public function customers()
    {
return Customer::get();   
    }
--------------------------------|
|------------------------
|Gating 1st row
|-------------------------------
 public function customers()
    {
$data= DB::table('customers')->first(); 
dd($data); 
    }

  or
   public function customers()
    {
$data= Customer::first(); 
dd($data); 
    }

--------------------------------|*/
/*
|------------------------
|Gating 1st row
|-------------------------------
  public function customers()
    {
 
$data= DB::table('customers')->first(); 
var_dump($data); 
    }
--------------------------------|*/
/*
|------------------------
|Where condition data search
|-------------------------------
  public function customers()
    {
 $data=DB::table('customers')->where('name', 'Karim')->get();
dd($data); 
    }
--------------------------------|*/
/*
|------------------------
|Find data using id
|-------------------------------
  public function customers($id)
    {
 $data=DB::table('customers')->find($id);
dd($data); 
    }
Route::get('customers/{id}', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|------------------------
|Plucking column name list
|-------------------------------
 public function customers()
    {
      echo  '<pre>';
 $data=DB::table('customers')->pluck('name');
var_dump($data); 
    }
Route::get('customers', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|------------------------
|Count number of record
|-------------------------------
  public function customers()
    {
      echo  '<pre>';
 $data=DB::table('customers')->count();
var_dump($data); 
    }
Route::get('customers', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|------------------------
|Sum of votes
|-------------------------------
  public function customers()
    {
 $data=DB::table('customers')->sum('votes');
return $data; 
    }
Route::get('customers', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|------------------------
|Maximum votes
|-------------------------------
  public function customers()
    {
 $data=DB::table('customers')->min('votes');
return $data; 
    }
Route::get('customers', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|------------------------
|Minimum votes
|-------------------------------
  public function customers()
    {
 $data=DB::table('customers')->min('votes');
return $data; 
    }
Route::get('customers', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|------------------------
|Average votes
|-------------------------------
 public function customers()
    {
      echo  '<pre>';
 $data=DB::table('customers')->avg('votes');
return $data; 
    }
Route::get('customers', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|------------------------
|Select column name replace username
|-------------------------------
public function customers()
    {
      echo  '<pre>';
 $data=DB::table('customers')->select('name as username')->get();
var_dump($data);
echo  '</pre>'; 
    }
Route::get('customers', [CustomerController::class, 'customers']);
--------------------------------|*/
/*
|-----------------------------------------------------------------
| Web Routes
|------------------------------------------------------------------
// Route::get('users',  [UserController::class, 'index']);
// Route::get('create_user', [UserController::class, 'create']);
// Route::post('add-user', [UserController::class, 'store']);
// Route::put('update-user',  [UserController::class, 'update']);
// Route::patch('update-user-name',[UserController::class, 'updateName']);
// Route::delete('delete-user', [UserController::class, 'delete']);
**********************************************
|insert using route web.php without controller 
**********************************************
/**************
|Route::get('index')
|view all user
|function--index
***************/
   /*
    public function index()
    {
     return view('user.index');
        }
  Route::get('index', [UserController::class, 'index']);
  ----------------------------------------------------
 Create Using Model:
      public function index()
    {
        echo '<pre>';
        $data = [
        'title' => 'Welcome to dhaka',

    'user_id'=>1,

        'description' => 'Lorem ipsum ',
        
        'status'=>0
    ];

    Post::create($data);
    var_dump($data);
        return view('post.index');
    }
/****************
| Route::get('users')
|view all users
|function-----users
******************/
/*
    public function users()
    {
      $users = User::all();
      return $users;
    }
 Route::get('users', [UserController::class, 'users']);
/*******************
| Route::get('users/{id}')
|view single user
|function show
***************/
/*
    public function show($id)
    {
    $users = User::findOrFail($id);
      return $users;

    }
  Route::get('users/{id}', [UserController::class, 'show']);
/********************
|Route::get('users_create')
|user create
|function---create
******************/
/*
    public function create(){
       $data=[
'name'=>'rahima',
'email'=>'rahima@yahoo.com',
'password'=>'264644'
        ];
        User::create($data);
        return 'User Created';
    }
Route::get('users_create', [UserController::class, 'create']);
/******************
|route('users_add')
|user store
|function-----store
********************/
  /*
    public function store(Request $request)
    {

    }

/********************
|Route::get('users_update/{id}')
|user update
|function-----update
*******************/
/*
    public function update(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $user->name='SarkarFiroz';
        $user->email='karimSarkar@yahoo.com';
        $user->password='esif4@cc';
        $user->save();
        return 'Updated';
    }
Route::get('users_update/{id}', [UserController::class, 'update']);
/*************************
|route('users_update_name')
|user single update
|function--updateName
**********************/
/*
public function updateName(Request $request, $id)
    {
        return 'Name hasbeen Updated';
    }
/********************
|Route::get('users_edit/{id}'
|users edit
|function---edit
*******************/
/*
    public function edit($id)
    {
       $user=User::findOrFail($id);
       
        $user->name='SarkarFiroz';
        $user->email='firoz@yahoo.com';
        $user->password='esif4@cc';
        $user->save();
        return 'Data Edited'; 
    }
Route::get('users_edit/{id}', [UserController::class, 'edit']);
/**********************
|Route::get('users_delete/{id}')
|users delete
|function---delete
*****************/
/*
   public function delete($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return 'User Deleted';
    }
    
 Route::get('users_delete/{id}', [UserController::class, 'delete']);
 ***********************************
 |Data Insert using callback function
 ***********************************
 Route::get('insert', function () {
  $data=[
'name'=>'Arif',
'email'=>'arif@gmail.com',
'votes'=>'150',
  ];
  Customer::insert($data);
        return 'User Inserted';
      });
 ***********************************
 |Data create using callback function
 ***********************************

      Route::get('insert', function () {
  DB::table('customers')->insert([
'name'=>'Shamol',
'email'=>'shamol@gmail.com',
'votes'=>'250',
  ]);
        return 'User Inserted';
      });
      ----------------------------------
          public function create()
    {
      $data=[
'name'=>'Farid',
'email'=>'farid@gmail.com',
'votes'=>'300'
  ];
 Customer::create($data);
        return 'Customer Created';
    }
  Route::get('customer_create', [CustomerController::class, 'create'])->name('customer_create');
  --------------------------------
   public function create()
    {
      $data=[
'name'=>'Faruk',
'email'=>'faruk@gmail.com',
'votes'=>'300'
  ];
 DB::table('customers')->insert($data);
        return 'Customer Created';
    }
    -----------------------------
    public function customer_single()
    {
    return DB::table('customers')
    ->where('votes',250)
    ->get();
    }
    ---------------------------
  public function customer_single()
    {
    return DB::table('customers')
    ->where('votes',250)
    ->sum('votes');
    }
    --------------------
    public function customer_single()
    {
    return DB::table('customers')
    ->select('votes')
    ->sum('votes');
    }
    --------------------
    public function customer_single()
    {
    return DB::table('customers')
    ->count('id');
    }
    -----------------------------
    public function customer_single()
    {
 $customers = DB::table('customers')
                ->where('votes', '<=', 100)
                ->get();
                return $customers;
    }
    ----------------------
    $customers = DB::table('customers')
                ->where('votes', '>', '200')
                ->get();
                return $customers;
    }
*/