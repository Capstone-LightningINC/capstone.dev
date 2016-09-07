@extends('layouts.master')

@section('content')


    <div class="col-md-2">
        <div class="schoolbox">
            <img src="http://lorempixel.com/460/250/" class="img-responsive">
            <div class="schooltitle">{{ $school->biz_name }}</div>
            <p class="text-justify">{{ $school->web_url }}</p>
            <p class="text-justify">Address: {{ $school->e_address }}</p>
            <p class="text-justify">City: {{ $school->e_city }}</p>
            <p class="text-justify">State: {{ $school->e_state }}</p>
            <p class="text-justify">Setting: {{ $school->c_setting }}</p>
            <p class="text-justify">Population: {{ $school->c_pop }}</p>
            <p class="text-justify">Ratio: {{ $school->c_ratio }}</p>
            <p class="text-justify">Type: {{ $school->c_type }}</p>
            <div class="pull-right"><button class="btn btn-success btn-sm">Add to My Schoools</button></div>
        </div>
    </div>




@stop