@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row search">    
        <div class="col-xs-8 col-xs-offset-2">
		    <div class="input-group search">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    	<span id="search_concept">Filter by</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#alpha">Alphabitize A-Z</a></li>
                      <li><a href="#rank">Rank</a></li>
                      <li><a href="#country">Country ></a></li>
                      <li><a href="#test_scores">Test Scores</a></li>
                      <li class="divider"></li>
                      <li><a href="#none">None</a></li>
                    </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">
               <form action="{{ action('HomeController@search') }}">
                    <input type="text" class="form-control" name="keyword" placeholder="Enter University Name or State">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span>Search</button>
                    </span>
               </form>
            </div>
        </div>
	</div>
</div>

@foreach($schools as $school)
    <a href="/schools/{{ $school->school_id }}">
    <div class="col-md-2">
      <div class="schoolbox">
        <img src="http://lorempixel.com/460/250/" class="img-responsive">
        <div class="schooltitle">{{ $school->biz_name }}</div>
        <p class="text-justify">{{ $school->web_url }}</p>
        <div class="pull-right"><button class="btn btn-success btn-sm">Add to My Schoools</button></div>
      </div>
    </div></a>

@endforeach

   <div class="pagination"> {!!$schools->render()!!} </div>

@stop