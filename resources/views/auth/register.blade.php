@extends('layouts.register')
@section('content')
<div class="register">
<form class="form-horizontal"  method="POST" action="{{ action('Auth\AuthController@postRegister') }}">
<fieldset>
{{ csrf_field() }}

<legend>Sign Up</legend>

    <div class="form-group">
      <label for="Name">Name</label>
      <div class="col-md-6">
      <input id="name" value="{{ old('name') }}" name="name" type="text" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="Preferred Name">Preferred Name</label>
      <div class="col-md-6">
      <input id="name" value="{{ old('preferred_name') }}" name="preferred_name" type="text" class="form-control input-md" required="">
      </div>
    </div>

    <div class="form-group">
      <label for="Email">Email</label>
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
        <label>Gender</label>
        <label class="radio-inline"><input type="radio" name="gender" value="0">
          Male
        </label>
        <label class="radio-inline"><input type="radio" name="gender" value="1">
          Female
        </label>
    </div>
    <div class="form-group">
        <label>Date of Birth</label>
        <div class="col-md-6">
          <input type="date" id="dob" name="DOB" placeholder="02/16/00" value="{{ isset($user) ? $user->personalInfo->DOB : '' }}">
        </div>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <div class="col-md-6">
        <input id="phone" value="{{ old('phone') }}" name="phone" type="text" class="form-control input-md" required="" placeholder="ex: +84470360812">
      </div>
    </div>

    <div class="form-group">
      <label for="company">Company</label>
      <div class="col-md-6">
        <select name="company" value="{{ old('company') }}">
          <option value="Lightning Inc">Lightning Inc</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label for="counselor">Counselor</label>
      <div class="col-md-6">
        <input id="counselor" value="{{ old('counselor_name') }}" type="text" name="counselor_name" type="counselor" class="form-control input-md">
      </div>
    </div>

    <div class="form-group">
      <label for="role">Role</label>
      <div class="col-md-6">
        <select name="authority">
          <option value="student">Student</option>
          <option value="counselor">Counselor</option>
          <!-- <option value="manager">Manager</option>
          <option value="assistant">Assistant</option>
          <option value="parent">Parent</option> -->
        </select>
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-4">
        <button id="register" name="register" class="btn btn-success register">Sign Up</button>
      </div>
    </div>

    @if ($errors->has('name'))
      {!! $errors->first('name', '<span class="help-block bg-danger">:message</span>') !!}
    @endif
    @if ($errors->has('email'))
      {!! $errors->first('email', '<span class="help-block bg-danger">:message</span>') !!}
    @endif
    @if ($errors->has('password'))
      {!! $errors->first('password', '<span class="help-block bg-danger">:message</span>') !!}
    @endif
</fieldset>
</form>
</div>

@stop