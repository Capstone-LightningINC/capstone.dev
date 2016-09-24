@extends('layouts.master')

@section('content')
<div class="full-height">

@foreach($errors->all() as $message)
	{!! $message !!}
@endforeach	
@foreach($activities as $activity)
<div class="row-fluid sortable activities h-scroll">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span></h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="{{ action('ActivitiesController@editMyActivities') }}">
				{{ csrf_field() }}
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="typeahead">Organization Name:</label>
						<div class="controls">
							<input type="text" class="span6 typeahead form-control" placeholder="National Honor Society" name="name" value="{{ $activity->name }}" >
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="typeahead">Position:</label>
						<div class="controls">
							<input type="text" class="span6 typeahead form-control" placeholder="President" name="position" value="{{ $activity->position }}">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="date01">Type:</label>
						<div class="controls">
							<select name="type" value="{{ $activity->type }}">
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
						<label class="control-label" for="textarea2">Description:</label>
						<div class="controls">
							<textarea class="cleditor" id="textarea2" placeholder="Write additional details here" name="description" value="{{ $activity->description }}"></textarea>
						</div>
					</div>

					<button type="submit" class="btn btn-primary" >Save</button>

				</fieldset>
			</form>
		</div>
	</div>
</div>
@endforeach
</div>
@stop
