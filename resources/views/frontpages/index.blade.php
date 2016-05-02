@extends('layouts.app')

@section('content')
    @if (count($frontpages) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Temp User Page
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <tbody>
                                @foreach ($frontpages as $frontpages)
                                    <tr>
                                        <div class="table table-bordered bg-success">
                                            <a href="/post/picture/{{$frontpages->picture_id}}"> <img src="{{ URL::to('/') }}/public'/Pictures/0.21007100-1462114647a.jpg'"/> </a>                                                                                               
                                            
                                    </tr>
                                    {{ URL::to('/') }}/public'/Pictures/0.21007100-1462114647a.jpg'
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
@endsection