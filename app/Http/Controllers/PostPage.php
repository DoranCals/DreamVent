<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//Eloquent Model
use App\Picture; 
use App\Story;
use App\GrabPics;


class PostPage extends Controller
{
    public function ViewImage($picture_id) {
		$picture = Picture::find($picture_id);
		return view('view name here', ['picture' => $picture]);
	}
	
	public function ViewStory ($story_id) {
		$story = Story::find($story_id);
		return view('view name here', ['story' => $story]);
	}
}
