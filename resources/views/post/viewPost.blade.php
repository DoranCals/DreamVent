@extends('layouts.app')

<link rel="stylesheet" href="{{ URL::asset('css/likeButton.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/postButton.css') }}">

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-0 col-md-offset-0">
          <div style="width:831px;">
            <div class="panel panel-default">
              <div class="panel-heading">posting</div>
                  <div class="panel-body">
                      <img src="{{ URL::to('/') }}{{$picture->picture_link}} " width="800" height="400">
                      
                      <div position: fixed; width: 50px; height: 60px;>
                        <a>
                          <a href="#" class="likeButton" ; size: fixed>{{$picture->num_likes}}</a>
                        </a>
                        
                        <a>
                          <a href="{{ url('/uploadStory/'.$picture->picture_id) }}" class="uploadButton">Post</a>
                        </a>
                      
                      </div>
                      
                      <div class="panel panel-default">
                        {{$picture->description}}
                      </div>
                      
                      <div class="panel panel-default">
                        {{$picture->description}}
                      </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection