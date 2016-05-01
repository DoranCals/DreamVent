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
		$story_ids = GrabPics::where('picture_id', 11)->select('story_id')->get();
		
		return view('test', 
			['Picture' => $picture,
			 'story_ids' => $story_ids]); //TODO link view
	}
	
	public function ViewStory ($story_id) {
		$story = Story::find($story_id);
		return view('placeholder', ['story' => $story]); //TODO link view
	}
}
