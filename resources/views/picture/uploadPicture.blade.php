@extends('layouts.app')

<link rel="stylesheet" href="{{ URL::asset('css/customFormSize.css') }}">
@section('content')
<div class="about-section">
  <div class="text-content">
     <div class="span7 offset1">
        @if(Session::has('success'))
          <div class="alert-box success">
            <h2>{!! Session::get('success') !!}</h2>
          </div>
        @endif
        <div class="secure">Upload an Image.</div>
        {!! Form::open(array('url'=>'/uploadPicture','method'=>'POST', 'files'=>true)) !!}
          <div class="control-group">
            <div class="controls">
              {!! Form::file('picture') !!}
		  
		            Write a short description for your picture :
              <div>

		            {!! Form::text('description', null, ['class'=> 'customSize'])  !!}
              </div>
	              <p class="errors">{!!$errors->first('image')!!}</p>
            @if(Session::has('error'))
	            <p class="errors">{!! Session::get('error') !!}</p>
	          @endif
            </div>
          </div>
        <div id="success"> </div>
      {!! Form::submit('Submit', array('class'=>'send-btn')) !!}
      {!! Form::close() !!}
      </div>
   </div>
</div>
@endsection