@extends('layouts.master')

@section('content')
<div class="full-height">
	{{--<div class="box black span4" onTablet="span6" onDesktop="span4">--}}
	{{--<div class="box-header">--}}
		{{--<h2><i class="halflings-icon white user"></i><span class="break"></span>My Students</h2>--}}
		{{--<div class="box-icon">--}}
			{{--<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>--}}
			{{--<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>--}}
		{{--</div>--}}
	{{--</div>--}}
	{{--<div class="box-content">--}}
		{{--<ul class="dashboard-list metro">--}}
			{{--<li class="green">--}}
				{{--<a href="#">--}}
					{{--<img class="avatar" src="../img/avatar.jpg">--}}
				{{--</a>--}}
				{{--<strong>Name:</strong> Dennis Ji<br>--}}
				{{--<strong>Since:</strong> Jul 25, 2012 11:09<br>--}}
				{{--<strong>Status:</strong> Approved--}}
			{{--</li>--}}
			{{--<li class="yellow">--}}
				{{--<a href="#">--}}
					{{--<img class="avatar" src="../img/avatar.jpg">--}}
				{{--</a>--}}
				{{--<strong>Name:</strong> Dennis Ji<br>--}}
				{{--<strong>Since:</strong> Jul 25, 2012 11:09<br>--}}
				{{--<strong>Status:</strong> Pending--}}
			{{--</li>--}}
			{{--<li class="red">--}}
				{{--<a href="#">--}}
					{{--<img class="avatar" src="../img/avatar.jpg">--}}
				{{--</a>--}}
				{{--<strong>Name:</strong> Dennis Ji<br>--}}
				{{--<strong>Since:</strong> Jul 25, 2012 11:09<br>--}}
				{{--<strong>Status:</strong> Banned--}}
			{{--</li>--}}
			{{--<li class="blue">--}}
				{{--<a href="#">--}}
					{{--<img class="avatar" src="../img/avatar.jpg">--}}
				{{--</a>--}}
				{{--<strong>Name:</strong> Dennis Ji<br>--}}
				{{--<strong>Since:</strong> Jul 25, 2012 11:09<br>--}}
				{{--<strong>Status:</strong> Updated--}}
			{{--</li>--}}
		{{--</ul>--}}
	{{--</div>--}}
{{--</div><!--/span-->--}}


	@foreach($students as $student)
		<a href="/showStudent/{{ $student->id }}">
			<div class="col-md-2">
				<div class="schoolbox row-fluid">
					<div class="col-md-1">
						@if ($student->personalInfo)
							<img src="/img/profile_img/{{ $student->personalInfo->profile_img }}" class="img-responsive student-pic" >
						@endif
					</div>
					<div class="nameAndInfoDiv">
						<div class="schooltitle">{{ $student->preferred_name }}</div>
						<p class="text-justify">{{ $student->authority }}</p>
						<div><button class="btn btn-success btn-sm">Student Info</button>
							<a type="reset" class="btn btn-danger delete" href="{{ action('HomeController@showStudent', $student->id) }}">Delete</a>
						</div>
					</div>
				</div>
			</div></a>

	@endforeach

</div>







@stop