@extends('layouts.register')
@section('content')
<div class="register">
<form class="form-horizontal" method="POST">
<fieldset>
{{ csrf_field() }}

<!-- Form Name -->
<legend>Sign Up</legend>

    <div class="form-group">
      <label for="Company Name">Name</label>
      <div class="col-md-6">
      <input id="name" value="{{ old('name') }}" name="name" type="text" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="Company Name">Preferred Name</label>
      <div class="col-md-6">
      <input id="name" value="{{ old('name') }}" name="preferredName" type="text" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="Address">Email</label>
      <div class="col-md-6">
      <input id="email" value="{{ old('email') }}" name="email" type="text" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="Password">Password</label>
      <div class="col-md-6">
        <input id="Password" value="{{ old('password') }}" type="password" name="password" type="password" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
        <label for="Password Again">Confirm Password</label>
        <div class="col-md-6">
          <input id="Password Again" name="password_confirmation" type="password" class="form-control input-md" required="">
        </div>
    </div>

    <div class="form-group">
      <label for="Token">Token</label>
      <div class="col-md-6">
        <input id="token" value="{{ old('token') }}" type="token" name="token" type="token" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="counselor">Counselor</label>
      <div class="col-md-6">
        <input id="counselor" value="{{ old('counselor') }}" type="counselor" name="counselor" type="counselor" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="role">Role</label>
      <div class="col-md-6">
        <select name="authority" value="{{ old('authority') }}">
          <option value="student">Student</option>
          <option value="counselor">Counselor</option>
          <option value="manager">Manager</option>
          <option value="assistant">Assistant</option>
          <option value="parent">Parent</option>
        </select>
      </div>
    </div>


    <!-- Button -->
    <div class="form-group">
      <label for=""></label>
      <div class="col-md-4">
        <button id="register" name="register" class="btn btn-success register">Sign Up</button>
      </div>
    </div>
</fieldset>
</form>
</div>

<!--     @if ($errors->has('name'))
      {!! $errors->first('name', '<span class="help-block bg-danger">:message</span>') !!}
    @endif
    @if ($errors->has('email'))
      {!! $errors->first('email', '<span class="help-block bg-danger">:message</span>') !!}
    @endif
    @if ($errors->has('password'))
      {!! $errors->first('password', '<span class="help-block bg-danger">:message</span>') !!}
    @endif -->

@stop