@extends('layouts.master')

@section('content')
<div class="row-fluid sortable activities h-scroll">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span></h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal">
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Organization Name</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="National Honor Society">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="typeahead">Position</label>
				  <div class="controls">
					<input type="text" class="span6 typeahead" id="typeahead" placeholder="President">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="date01">Type</label>
				  <div class="controls">
					<select name="authority">
			          <option value="clubOrganization">Club/Organization</option>
			          <option value="sport">Sport</option>
			          <option value="volunteer">Volunteer Work</option>
			          <option value="competition">Competition</option>
			          <option value="award">Award</option>
			          <option value="job">Job/Internship</option>
			          <option value="other">Other</option>
			        </select>
				  </div>
				</div>

				         
				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Description</label>
				  <div class="controls">
					<textarea class="cleditor" id="textarea2" placeholder="Write additional details here"></textarea>
				  </div>
				</div>
			
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save</button>
				  <button type="reset" class="btn btn-danger delete">Delete</button>
				  <button type="submit" class="btn btn-info new">New Entry</button>
				</div>

			  </fieldset>
			</form>
		</div>
	</div>
</div>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="/js/modals.js"></script>

@stop