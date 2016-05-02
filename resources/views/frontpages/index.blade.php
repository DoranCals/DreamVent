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
                                            <a href="/post/picture/{{$frontpages->picture_id}}">
                                                {{$frontpages->picture_id}}</a></div>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
@endsection