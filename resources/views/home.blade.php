@extends("layouts.register")

@section('content')
<body class="welcome">
	<div class="container" style="margin-top:5%;">
		<div class="row welcome">
	      <h1 class="text-center welcome" alt="welcome image">Welcome</h1>
			<center><div class="btn-group" style="margin-top:50px;">
	         <a href="/auth/register"><button class="btn btn-lg register welcome">Register</button></a>
	         <a href="/auth/login"><button class="btn btn-lg btn-transparent login welcome">Login</button></a>

	  		</div></center>
		</div>
	</div>
</body>
@stop
