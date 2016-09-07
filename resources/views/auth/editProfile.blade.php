@extends('layouts.master')

@section('content')

 <?php $studentCheck = $user->authority == 'student'; ?>
 <?php $counselorCheck = $user->authority == 'counselor'; ?>


<form class="form-horizontal" action="{{ action('UsersController@validateAndSave') }}" method="post">
{{ csrf_field() }}
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Account Information</h2>
			</div>

			<div class="box-content">

				<fieldset>
					<div class="control-group">
					  <label class="control-label" for="typeahead">Name </label>
					  <div class="controls">
						<input type="text" class="span6 typeahead" id="typeahead" value="{{ $user->name }}" name="name">
					   </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="typeahead">Preferred Name </label>
					  <div class="controls">
						<input type="text" class="span6 typeahead" id="typeahead" value="{{ $user->preferred_name }}" name="preferred_name">
					  </div>
					</div>
					
					<div class="control-group">
						<label class="control-label" for="typeahead">Email </label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" value="{{ $user->email }}" name="email">
						</div>
						<div class="control-group">
						<label class="control-label" for="typeahead">Phone</label>
							<div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead" value="{{ $user->phone }}" name="phone">
						  	</div>
						</div>
					</div>  
					<button type="submit" class="btn btn-primary" >Save</button>
			</div>
		</div><!--/span-->
	</div><!--/row-->
	</fieldset> 
</form>

<form class="form-horizontal" method="post" action="{{ action('PersonalInfoController@validateAndSave') }}">
{{ csrf_field() }}
						
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Personal Information</h2>
		</div>
		<div class="box-content">
			<div class="form-horizontal" action="{{ action('HomeController@profile', 'PersonalInfoController@validateAndSave') }}" method="post">
			<fieldset>
				<div class="control-group">
				  	<label class="control-label" for="fileInput">Photo Upload</label>
					<div class="controls">
						<input class="input-file uniform_on" id="fileInput" type="file" value="{{ $user->personalInfo->photo }}">
					</div>
				</div>
				<div class="form-group">
				  	<label class="control-label" for="typeahead">Gender</label>
					<div class="controls">
						@if($user->gender == 1)
						  	<input type="radio" name="gender" value="0"> Male<br>
						  	<input type="radio" name="gender" value="1" checked>Female<br>
						@else
						  	<input type="radio" name="gender" value="0" checked> Male<br>
							<input type="radio" name="gender" value="1"> Female<br>
					  	@endif
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" for="typeahead">Date of Birth</label>
					<div class="controls">
						<input type="date" class="span6 typeahead" id="dob" placeholder="02/16/00" value="{{ $user->personalInfo->DOB }}">
					</div>
				</div>
				<div class="control-group">
				  	<label class="control-label" for="typeahead">WeChat </label>
				  	<div class="controls">
						<input type="text" class="span6 typeahead" id="typeahead" value="{{ $user->personalInfo->WeChat }}">
					</div>
				</div>
				@if($studentCheck)
					<div class="control-group">
					  	<label class="control-label" for="typeahead">Parents Name </label>
					  	<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="Parent 1" value="{{ $user->personalInfo->parent1 }}"><br>
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="Parent 2" value="{{ $user->personalInfo->parent2 }}">
					  	</div>
					</div>
				@endif
			
		<div class="box-content">
			<div class="form-horizontal">
			  	<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">High School</label>
						<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="Smith High School" value="{{ $user->personalInfo->highSchool }}">
					  	</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">SAT </label>
					  	<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="1500" value="{{ $user->personalInfo->SAT }}">
					  </div>
					</div>

					<div class="control-group">
					  	<label class="control-label" for="typeahead">ACT </label>
					  	<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="21" value="{{ $user->personalInfo->ACT }}">
					  	</div>
					</div>
					<div class="control-group">
					  	<label class="control-label" for="typeahead">TOEFL </label>
					  	<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="80" value="{{ $user->personalInfo->TOEFL }}">
					  	</div>
					</div>
				
					<div class="control-group">
					  	<label class="control-label" for="typeahead">GPA</label>
					  	<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="3.8" value="{{ $user->personalInfo->GPA }}">
					  	</div>
					</div>
				
					<div class="control-group">
					  	<label class="control-label" for="typeahead">Intended Majors</label>
					  	<div class="controls">
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="Computer Science" value="{{ $user->personalInfo->major1 }}"><br>
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="Engineering" value="{{ $user->personalInfo->major2 }}"><br>
							<input type="text" class="span6 typeahead" id="typeahead" placeholder="Biology" value="{{ $user->personalInfo->major3 }}">
					  	</div>
					</div>
					<button type="submit" class="btn btn-primary" >Save</button>
				  </fieldset>
				</div>   
			</div>
		</div><!--/span-->
	</div><!--/row-->
	@endif
</div>
</form>

@stop