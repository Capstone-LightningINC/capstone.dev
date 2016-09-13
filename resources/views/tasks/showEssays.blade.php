@extends('layouts.master')

@section('content')


    @foreach($essays as $essay)
        <div class="row-fluid sortable activities h-scroll">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white edit"></i><span class="break"></span></h2>
                </div>
                <div class="box-content">
                    {{--<form class="form-horizontal" method="post" action="{{ action('HomeController@addToMyActivities') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        <fieldset>
                            <div class="control-group">
                                <div class="controls">
                                    <P>School: {{ $essay->school_id }}</P>
                                    {{--<input type="text" class="span6 typeahead form-control" placeholder="National Honor Society" name="name">--}}
                                </div>
                            </div>
                            <div class="control-group">

                                <div class="controls">
                                    <P>{{ $essay->topic }}</P>
                                    {{--<input type="text" class="span6 typeahead form-control" placeholder="President" name="position">--}}
                                </div>
                            </div>
                            <div class="control-group">

                                <div class="controls">
                                    {{--<P>{{ $essay->essay }}</P>--}}
                                    {{--<select name="type">--}}
                                    {{--<option value="clubOrganization">Club/Organization</option>--}}
                                    {{--<option value="sport">Sport</option>--}}
                                    {{--<option value="volunteer">Volunteer Work</option>--}}
                                    {{--<option value="competition">Competition</option>--}}
                                    {{--<option value="award">Award</option>--}}
                                    {{--<option value="job">Job/Internship</option>--}}
                                    {{--<option value="other">Other</option>--}}
                                    {{--</select>--}}
                                </div>
                            </div>


                            <div class="control-group hidden-phone">
                                <label class="control-label" for="textarea2">Essay:</label>
                                <div class="controls">
                                    <P>{!!$essay->essay!!}</P>
                                    {{--<textarea class="cleditor" id="textarea2" placeholder="Write additional details here" name="description"></textarea>--}}
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a type="reset" class="btn btn-danger delete" href="">Delete</a>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

    @endforeach

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/js/modals.js"></script>

@stop


