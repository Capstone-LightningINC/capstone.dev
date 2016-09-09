@extends('layouts.master')

@section('content')



    <div class="col-md-2">
        <div class="schoolbox">
            <img src="http://lorempixel.com/460/250/" class="img-responsive">
            <div class="schooltitle">Preferred Name: {{ $student->preferred_name }}</div>
            <p class="text-justify">Name: {{ $student->name }}</p>
            <p class="text-justify">Gender: {{ $student->gender }}</p>
            <p class="text-justify">Email: {{ $student->email }}</p>
            <p class="text-justify">Phone:: {{ $student->phone }}</p>
            <p class="text-justify">WeChat: {{ $student->personalInfo->WeChat }}</p>
            <p class="text-justify">DOB: {{ $student->personalInfo->DOB }}</p>
            <p class="text-justify">Parent: {{ $student->personalInfo->parent1 }}</p>
            <p class="text-justify">Parent: {{ $student->personalInfo->parent2 }}</p>
            <p class="text-justify">High School: {{ $student->personalInfo->highschool }}</p>
            <p class="text-justify">SAT: {{ $student->personalInfo->SAT }}</p>
            <p class="text-justify">ACT: {{ $student->personalInfo->ACT }}</p>
            <p class="text-justify">TOEFL: {{ $student->personalInfo->TOEFL }}</p>
            <p class="text-justify">GPA: {{ $student->personalInfo->GPA }}</p>
            {{--<a href="{{ action("SchoolsController@addToMySchools", ['school_id'=> $student->id]) }}"><div class="pull-right"><button class="btn btn-success btn-sm">Add to My Schoools</button></div></a>--}}
        </div>
    </div>





@stop