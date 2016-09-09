@extends('layouts.master')

@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Write An Essay</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="post" action="{{ action('EssaysController@store') }}">
                {{ csrf_field() }}
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">School</label>
                            <div class="controls">
                                <select id="schools" name="school_id">
                                    <option value="">Select one..</option>
                                    @foreach ($student->mySchools as $school)
                                        <option value="{{ $school->school_id }}">{{ $school->biz_name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('school_id'))
                                      {!! $errors->first('school_id', '<span class="help-block bg-danger">:message</span>') !!}
                                @endif
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Topic</label>
                            <div class="controls">
                                <select id="topics" name="topic">
                                </select>

                             @if ($errors->has('topic'))
                                      {!! $errors->first('topic', '<span class="help-block bg-danger">:message</span>') !!}
                                @endif
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Date Due:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="date01" value="2016-10-16" name="deadline" readonly>
                            </div>

                             @if ($errors->has('deadline'))
                                      {!! $errors->first('deadline', '<span class="help-block bg-danger">:message</span>') !!}
                                @endif
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Write here:</label>
                            <div class="controls">
                                <textarea  id="textarea2" rows="3" name="essay"></textarea>
                            </div>

                             @if ($errors->has('essay'))
                                      {!! $errors->first('essay', '<span class="help-block bg-danger">:message</span>') !!}
                                @endif
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

@section('scripts')
<script>
var $topics = $('#topics');
var $schools = $('#schools');

$schools.on('change', function() {
    if ($schools.val() == '') return;

    $.ajax('/students/schools/topics/' + $schools.val())
     .done(function(options) {
        console.log(options);
        $topics.html(options);
    });    
});

</script>
@stop