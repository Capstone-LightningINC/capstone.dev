@extends('layouts.master')

@section('content')



    <div class="col-md-2">
        <div class="personalInfoBox">
            {{--<img src="/img/profile_img/{{ $student->profile_img }}" class="img-responsive">--}}
            <div class="schooltitle" id="namePadding">{{ $student->preferred_name }}</div>
            <div class="row-fluid">
            <div class="infoBox">
            <p class="text-justify"><b>Full Name:</b> {{ $student->name }}</p>
            @if ($student->gender == 0)
                <p class="text-justify"><b>Gender: </b>Male</p>
            @else
                <p class="text-justify"><b>Gender: </b>Female</p>
            @endif

            <p class="text-justify"><b>Email:</b> {{ $student->email }}</p>
            <p class="text-justify"><b>Phone:</b> {{ $student->phone }}</p>
            <p class="text-justify"><b>WeChat:</b> {{ $student->personalInfo->WeChat }}</p>
            <p class="text-justify"><b>DOB:</b> {{ $student->personalInfo->DOB }}</p>
            <p class="text-justify"><b>Parent:</b> {{ $student->personalInfo->parent1 }}</p>
            <p class="text-justify"><b>Parent:</b> {{ $student->personalInfo->parent2 }}</p>
            </div>
            <div class="infoBox">
            <p class="text-justify"><b>High School:</b> {{ $student->personalInfo->highSchool }}</p>
            <p class="text-justify"><b>SAT:</b> {{ $student->personalInfo->SAT }}</p>
            <p class="text-justify"><b>ACT:</b> {{ $student->personalInfo->ACT }}</p>
            <p class="text-justify"><b>TOEFL:</b> {{ $student->personalInfo->TOEFL }}</p>
            <p class="text-justify"><b>GPA:</b> {{ $student->personalInfo->GPA }}</p>
            {{--<a href="{{ action("SchoolsController@addToMySchools", ['school_id'=> $student->id]) }}"><div class="pull-right"><button class="btn btn-success btn-sm">Add to My Schoools</button></div></a>--}}
            </div>
             </div>
        </div>
    </div>





@stop