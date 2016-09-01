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
                <input type="text" class="form-control" name="x" placeholder="Enter University Name or State">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span>Search</button>
                </span>
            </div>
        </div>
	</div>
</div>

<div class="col-md-2">
  <div class="schoolbox">
    <img src="http://lorempixel.com/460/250/" class="img-responsive">
    <div class="schooltitle">school</div>
    <p class="text-justify">The school is the greatest school ever, it will do what it's designed for. No more, no less.</p>
    <div class="pull-right"><button class="btn btn-success btn-sm">Add to My Schoools</button></div>
  </div>
</div>

@stop