@extends('layouts.master')

@section('content')



    <div class="col-md-2">
        <div class="schoolbox">
            <img src="http://lorempixel.com/460/250/" class="img-responsive">
            <div class="schooltitle">Nickname: {{ $student->preferred_name }}</div>
            <div class="infoBox">
            <p class="text-justify"><b>Name:</b> {{ $student->name }}</p>
            <p class="text-justify"><b>Gender:</b> {{ $student->gender }}</p>
            <p class="text-justify"><b>Email:</b> {{ $student->email }}</p>
            <p class="text-justify"><b>Phone:</b> {{ $student->phone }}</p>
            <p class="text-justify"><b>WeChat:</b> {{ $student->personalInfo->WeChat }}</p>
            <p class="text-justify"><b>DOB:</b> {{ $student->personalInfo->DOB }}</p>
            <p class="text-justify"><b>Parent:</b> {{ $student->personalInfo->parent1 }}</p>
            <p class="text-justify"><b>Parent:</b> {{ $student->personalInfo->parent2 }}</p>
            </div>
            <div class="infoBox">
            <p class="text-justify"><b>High School:</b> {{ $student->personalInfo->highschool }}</p>
            <p class="text-justify"><b>SAT:</b> {{ $student->personalInfo->SAT }}</p>
            <p class="text-justify"><b>ACT:</b> {{ $student->personalInfo->ACT }}</p>
            <p class="text-justify"><b>TOEFL:</b> {{ $student->personalInfo->TOEFL }}</p>
            <p class="text-justify"><b>GPA:</b> {{ $student->personalInfo->GPA }}</p>
            {{--<a href="{{ action("SchoolsController@addToMySchools", ['school_id'=> $student->id]) }}"><div class="pull-right"><button class="btn btn-success btn-sm">Add to My Schoools</button></div></a>--}}
            </div>
        </div>
    </div>





@stop