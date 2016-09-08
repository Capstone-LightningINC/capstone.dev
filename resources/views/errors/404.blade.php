@extends('layouts.master')

@section('content')

<body class="error404">
	<div class="container" style="margin-top:5%;">
		<div class="row error404">
	      <h1 class="text-center error404" alt="error404 image">Error 404</h1>
	      	<p>Page not found! ¯\_(ツ)_/¯</p>
			<center><div class="btn-group" style="margin-top:50px;">
	         <a href="/profile/{id}"><button class="btn btn-lg register error404">Go Back</button></a>

	  		</div></center>
		</div>
	</div>
</body>

@stop