<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Picture;
use App\Story; 

class PostController extends Controller
{
    public function toPicturePost($picture_id) {
      return view('post/post',  ['picture' => Picture::find($picture_id)]);
    }
 
    public function toStoryPost($story_id) {
      return view('post/post',  ['story' => Story::find($story_id)]);
    }
}
/*
<h1 class="well well-lg">List of Pictures</h1>
@foreach( $pictures as $picture )
    <div class="table table-bordered bg-success"><a href="{!! $picture->picture_link !!}">{{$picture->picture_link}}</a></div>
@endforeach*/