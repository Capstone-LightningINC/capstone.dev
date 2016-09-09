@extends('layouts.master')

@section('content')
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>Write An Essay</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">School</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead" name="school" >
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Topic</label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead" name="topic">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">Date Due:</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge datepicker" id="date01" value="10/16/16" readonly>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">Write here:</label>
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