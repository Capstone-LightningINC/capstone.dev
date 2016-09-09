@extends('layouts.master')

@section('content')



    <div class="col-md-2">
        <div class="schoolbox">
            <img src="http://lorempixel.com/460/250/" class="img-responsive">
            <div class="schooltitle">{{ $student->preferred_name }}</div>
            <p class="text-justify">{{ $student->name }}</p>
            <p class="text-justify">Address: {{ $student->gender }}</p>
            <p class="text-justify">City: {{ $student->email }}</p>
            <p class="text-justify">State: {{ $student->phone }}</p>
            <p class="text-justify">Setting: {{ $student->WeChat }}</p>
            <p class="text-justify">Population: {{ $student->DOB }}</p>
            <p class="text-justify">Ratio: {{ $student->parent1 }}</p>
            <p class="text-justify">Type: {{ $student->parent2 }}</p>
            <p class="text-justify">Address: {{ $student->highschool }}</p>
            <p class="text-justify">City: {{ $student->SAT }}</p>
            <p class="text-justify">State: {{ $student->ACT }}</p>
            <p class="text-justify">Setting: {{ $student->TOEFL }}</p>
            <p class="text-justify">Population: {{ $student->GPA }}</p>
            {{--<a href="{{ action("SchoolsController@addToMySchools", ['school_id'=> $student->id]) }}"><div class="pull-right"><button class="btn btn-success btn-sm">Add to My Schoools</button></div></a>--}}
        </div>
    </div>





@stop