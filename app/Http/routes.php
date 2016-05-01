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

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Tutorials and Examples
|--------------------------------------------------------------------------
Create
Route::post()

Read: whenever we submite our data to the form
Route::get()
	Variables
	Route::get('hello/{name}', function($name){
		echo 'Hello there ' . $name;
	});

	Send an item to put route
	Route::get('test',function(){
		echo '<form action="test" method="POST">';
		echo '<input type="submit" value="submit">';
		echo '<input type="submit" value="submit">';
	});
Update
Route::put()

Delete
Route::delete()
*/


//need to read up on middleware.
Route::group(['middleware' => ['web']], function () {
	
	//welcome page
	Route::get('/', 'WelcomeController@nonUserFrontPage'
		)->middleware('guest');

	Route::get('/frontpages', 'FrontPageController@userBaseFrontPage');
	Route::get('/YourPictures', 'FrontPageController@YourPictures');
	
	//authentication
	Route::auth();
	
	Route::controllers([
	   'password' => 'Auth\PasswordController',
	]);
	
	//=== Begin: Temporary Test Stuff ===
	Route::get('/currentUser', 'UserController@currentUser');
	Route::get('/test/{picture_id}', 'test@test' );
	// === End: Temporary Test Stuff ===
	
	// === Begin: Post Page ===
	Route::get('/post/picture/{picture_id}','PostPage@ViewImage');
	Route::get('/post/story/{story_id}','PostPage@ViewStory');
	// === End: Post Page ===
	
	//=== Begin: Browse ===
	Route::get('/browse', 'Browse@defaultBrowse');
	//=== End: Browse === 
	
	//=== Begin: Uploading Pictures ===
	//Display: upload standalone picture
	Route::get('/uploadPicture', 'PictureController@upload');
	
	//Handles submission
	Route::post('/uploadPicture', 'PictureController@store');

	//View uploaded pictures
	Route::get('/viewPictures', 'PictureController@show');
	// === End: Uploading Pictures ===
	
	// === Begin: Uploading Stories ===
	//display: uploading standalone story.
	Route::get ('/uploadStory/', 'StoryController@uploadParent'); 				//upload story as standalone
	Route::get ('/uploadStory/{picture_id}', 'StoryController@uploadChild');	//upload story in response to picture prompt
	
	//Store
	Route::post('/uploadStory/', 'StoryController@storeParent');				//store parent
	Route::post('/uploadStory/{picture_id}', 'StoryController@storeChild');		//store child
	// === End: Uploading Stories ===
	
	
	
	
	
	//display:
	
	

});

