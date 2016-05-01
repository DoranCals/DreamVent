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
	
	/*
	* =====================
	* Welcome Page
	* =====================
	*/
	Route::get('/', 'WelcomeController@nonUserFrontPage'
		)->middleware('guest');

	Route::get('/frontpages', 'FrontPageController@userBaseFrontPage');
	Route::get('/YourPictures', 'FrontPageController@YourPictures');
	
	/*
	* =====================
	* Authentication
	* =====================
	*/
	Route::auth();
	
	Route::controllers([
	   'password' => 'Auth\PasswordController',
	]);
	
	/*
	* =====================
	* Temporary Test Stuff
	* =====================
	*/
	Route::get('/currentUser', 'UserController@currentUser');
	//Route::get('/test/{picture_id}', 'test@test' );

	
	/*
	* =====================
	* Post Page (i.e. displaying content)
	* =====================
	*/
	Route::get('/post/picture/{picture_id}','PostPage@ViewImage');
	Route::get('/post/story/{story_id}','PostPage@ViewStory');

	
	/*
	* =====================
	* Browsing
	* =====================
	*/
	//content: pictures, stories
	Route::get('/browse', 'Browse@defaultBrowse');
	//users
	Route::get('/browseUsers', 'Browse@defaultBrowseUser');

	
	/*
	* =====================
	* Uploading Pictures
	* =====================
	*/
	//Upload Form
	Route::get('/uploadPicture', 'PictureController@upload');
	
	//Store
	Route::post('/uploadPicture', 'PictureController@store');

	//View uploaded pictures
	Route::get('/viewPictures', 'PictureController@show');

	
	/*
	* =====================
	* Uploading Stories
	* =====================
	*/
	//Upload Form
	Route::get ('/uploadStory/', 'StoryController@uploadParent'); 				//upload story as standalone
	Route::get ('/uploadStory/{picture_id}', 'StoryController@uploadChild');	//upload story in response to picture prompt
	
	//Store
	Route::post('/uploadStory/', 'StoryController@storeParent');				//store parent
	Route::post('/uploadStory/{picture_id}', 'StoryController@storeChild');		//store child

	

});

