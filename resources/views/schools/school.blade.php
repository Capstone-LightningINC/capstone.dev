@extends('layouts.master')

@section('content')



    <div class="col-md-2">
        <div class="schoolbox">
            <img src="img/school_img {{ $school->img_url }}" class="img-responsive">
            <div class="schooltitle">{{ $school->biz_name }}</div>
            <p class="text-justify"><b>Website: </b><a href="{{ $school->web_url }}" target="_blank">{{ $school->web_url }}</a></p>
            <p class="text-justify"><b>Address:</b> {{ $school->e_address }}</p>
            <p class="text-justify"><b>City:</b> {{ $school->e_city }}</p>
            <p class="text-justify"><b>State:</b> {{ $school->e_state }}</p>
            <p class="text-justify"><b>Setting:</b> {{ $school->c_setting }}</p>
            <p class="text-justify"><b>Population:</b> {{ $school->c_pop }}</p>
            <p class="text-justify"><b>Ratio:</b> {{ $school->c_ratio }}</p>
            <p class="text-justify"><b>Type:</b> {{ $school->c_type }}</p>
            <a href="{{ action("SchoolsController@addToMySchools", ['school_id'=> $school->school_id]) }}"><div><button class="btn btn-success btn-sm">Add to My Schoools</button></div></a>
        </div>
    </div>





@stop