<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
 
	 Route::get('/', function () {
	    //return view('postlist');
	    
	    $posts = App\Models\Post::all();
		//['type'=>$type]
		return view('postlist',compact('posts'));
	    
	});
 
   
    Route::get('posts', function(){
		$posts = App\Models\Post::all();
			// 'productlist',['type'=>$type]
		return view('postlist',compact('posts'));
	});
	
	Route::get('posts/{id}', function($id){
		$post = App\Models\Post::find($id);
			// 'productlist',['type'=>$type]
		return view('showpost',compact('post'));
	});

// users 
	
	// create
	Route::get('users/create', function(){
		return view('registerform');
	});
	
	// view
	Route::get('users/{id}', function($id){
		$user = App\Models\User::find($id);
				// 'userdetails',['type'=>$type]
		return view('userdetails',['user'=>$user]);
	});

	// process
	Route::post('users', function(App\Http\Requests\CreateUserRequest $req){
		$user = App\Models\User::create(Request::all());
		
		$user->password = bcrypt($user->password);
		$user->save();
		return redirect('users/'.$user->id);
	});


// Auth

	// login
	Route::get('login', "LoginController@showLoginForm");
	// validate
	Route::post('login', "LoginController@processLogin");
	// logout
	Route::get('logout', "LoginController@logout");

});
