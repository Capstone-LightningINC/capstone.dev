@extends('layouts.master')

@section('content')

<?php $studentCheck = $user->authority == 'student'? true : false; ?>

<form class="form-horizontal" method="post" action="{{ action('PersonalInfoController@validateAndSave') }}">
{{ csrf_field() }}

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Personal Information</h2>
		</div>

			<fieldset>
				<div class="control-group">
					<label class="control-label" for="typeahead">Date of Birth</label>
					<div class="controls">
						<input type="date" class="form-control" id="dob" placeholder="02/16/00" name="DOB">
					</div>
				</div>
				<div class="control-group">
				  	<label class="control-label" for="typeahead">WeChat </label>
				  	<div class="controls">
						<input type="text" class="form-control" name="WeChat">
					</div>
				</div>


				<div class="control-group">
				  	<label class="control-label" for="fileInput">Photo Upload</label>
					<div class="controls">
						<input class="input-file uniform_on" id="fileInput" type="file" name="photo">
					</div>
				</div>




				@if($studentCheck)
					<div class="control-group">
					  	<label class="control-label" for="typeahead">Parents Name </label>
					  	<div class="controls">
							<input type="text" class="form-control" placeholder="Parent 1" name="parent1"><br>
							<input type="text" class="typeahead form-control" placeholder="Parent 2" name="parent2">
					  	</div>
					</div>
			
		<div class="box-content">
			<div class="form-horizontal">
			  	<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">High School</label>
						<div class="controls">
							<input type="text" class="form-control" placeholder="Smith High School" name="highSchool">
					  	</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">SAT </label>
					  	<div class="controls">
							<input type="text" class="form-control" placeholder="1500" name="SAT">
					  	</div>
					</div>

					<div class="control-group">
					  	<label class="control-label" for="typeahead">ACT </label>
					  	<div class="controls">
							<input type="text" class="form-control" placeholder="21" name="ACT">
					  	</div>
					</div>
					<div class="control-group">
					  	<label class="control-label" for="typeahead">TOEFL </label>
					  	<div class="controls">
							<input type="text" class="form-control" placeholder="80" name="TOEFL">
					  	</div>
					</div>
				
					<div class="control-group">
					  	<label class="control-label" for="typeahead">GPA</label>
					  	<div class="controls">
							<input type="text" class="form-control" placeholder="3.8" name="GPA">
					  	</div>
					</div>
				
					<div class="control-group">
					  	<label class="control-label" for="typeahead">Intended Majors</label>
					  	<div class="controls">
							<input type="text" class="form-control" placeholder="Computer Science" name="major1"><br>
							<input type="text" class="form-control" placeholder="Engineering" name="major2"><br>
							<input type="text" class="form-control" placeholder="Biology" name="major3">
					  	</div>
					</div>
					@endif
					<button type="submit" class="btn btn-primary" >Save</button>
				</div>   
			</div>
		
	</div><!--/row-->
</div>
  </fieldset>
</form>

@foreach($errors->all() as $message)
	{!! $message !!}
@endforeach	
@stop