@extends('layouts.register')
@section('content')
<body class="login">
<div class="full-height">
<div class="login">
  <form class="form-horizontal" method="post" action="{{ action('Auth\AuthController@postLogin') }}">
	{{ csrf_field() }}
	<div class= "form-group">
		<label for="email">Email</label>
		<input
		  type="text"
		  class="form-control"
		  name="email"
		  id="email">
		  @if ($errors->has('email'))
			{!! $errors->first('email', '<span class="help-block bg-danger">:message</span>') !!}
		  @endif
	</div>
	<div class= "form-group">
		<label for="password">Password</label>
		<input
		  type="password"
		  class="form-control"
		  name="password"
		  id="password"><br>
		  @if ($errors->has('password'))
			{!! $errors->first('password', '<span class="help-block bg-danger">:message</span>') !!}
		  @endif
		<button type="submit" class="btn btn-info pull-right">Login</button>
	</div>
  </form>
</div>
</div>
</body>
@stop