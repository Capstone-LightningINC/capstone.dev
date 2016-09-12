@extends('layouts.master')

@section('content')

  @foreach($schools as $school)
    <a href="/schools/{{ $school->school_id }}">
      <div class="col-md-2">
        <div class="schoolbox">
          @if($school->img_url)
            <img src="/img/schools_img/{{ $school->img_url }}" class="img-responsive">
          @else
            <img src="/img/schools_img/college.jpg" class="img-responsive">
          @endif
            <div class="schooltitle">{{ $school->biz_name }}</div>
          <p class="text-justify form-control"><a href="{{ $school->web_url }}" target="_blank">{{ $school->web_url }}</a></p>
          <div>
            <a href="/schools/{{ $school->school_id }}" class="btn btn-success btn-sm">More Info</a>
            <a type="reset" class="btn btn-danger delete" href="{{ action('SchoolsController@deleteMySchools', $school->school_id) }}">Delete</a>
          </div>
        </div>
      </div></a>

  @endforeach

@stop