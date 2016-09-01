@extends('layouts.master')

@section('content')
						
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Personal Information</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal">
			  <fieldset>
			  	<div class="control-group">
				  <label class="control-label" for="typeahead">Name </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Preferred Name </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="fileInput">Photo Upload</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" type="file">
				  </div>
				</div>  
				<div class="control-group">
				  <label class="control-label" for="typeahead">Gender</label>
				  <div class="controls">
					<form>
					  <input type="radio" name="gender" value="0"> Male<br>
					  <input type="radio" name="gender" value="1"> Female<br>
					</form>
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Date of Birth</label>
				  <div class="controls">
					<input type="date" class="span6 typeahead" id="dob" placeholder="02/16/00">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Parents Name </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="Parent 1"><br>
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="Parent 2">
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Education</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal">
			  <fieldset>
			  	<div class="control-group">
				  <label class="control-label" for="typeahead">High School</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="Smith High School"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">SAT </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="1500"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">ACT </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="21"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">TOEFL </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="80"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">GPA</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="3.8"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Intended Majors</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="Computer Science"><br>
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="Engineering"><br>
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="Biology">
				  </div>
				</div>

				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Transcript</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal">
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="typeahead">School Name </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Current as of</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="date01" placeholder="02/16/16">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="fileInput">File input</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" type="file">
				  </div>
				</div>          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Description</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" rows="3"></textarea>
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Letter of Recommendation</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal">
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="typeahead">From </label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="Dr. John Smith"  >
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label">Relationship</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" placeholder="Teacher">
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="fileInput">File input</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" type="file">
				  </div>
				</div>          
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Description</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" rows="3"></textarea>
				  </div>
				</div>
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->


@stop