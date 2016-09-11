@extends('layouts.master')

@section('content')

  @foreach($schools as $school)
    <a href="/schools/{{ $school->school_id }}">
      <div class="col-md-2">
        <div class="schoolbox">
          <img src="http://lorempixel.com/460/250/" class="img-responsive">
          <div class="schooltitle">{{ $school->biz_name }}</div>
          <p class="text-justify form-control"><a href="{{ $school->web_url }}" target="_blank">{{ $school->web_url }}</a></p>
          <div><button class="btn btn-success btn-sm">More Info</button>
            <a type="reset" class="btn btn-danger delete" href="{{ action('SchoolsController@deleteMySchools', $school->school_id) }}">Delete</a>
          </div>
        </div>
      </div></a>

  @endforeach

@stop