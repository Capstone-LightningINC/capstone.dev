@extends('layouts.master')

@section('content')

  @foreach($schools as $school)
    <a href="/schools/{{ $school->school_id }}">
      <div class="col-md-2">
        <div class="schoolbox">
          <img src="http://lorempixel.com/460/250/" class="img-responsive">
          <div class="schooltitle">{{ $school->biz_name }}</div>
          <p class="text-justify">{{ $school->web_url }}</p>
          <div class="pull-right"><button class="btn btn-success btn-sm">More Info</button></div>
        </div>
      </div></a>

  @endforeach

  <div class="pagination"> {!!$schools->render()!!} </div>



@stop