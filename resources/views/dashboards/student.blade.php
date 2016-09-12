@extends("layouts.master")

@section('content')
    {{--<ul class="breadcrumb">--}}
        {{--<li>--}}
            {{--<i class="icon-home"></i>--}}
            {{--<a href="index.html">Home</a>--}}
            {{--<i class="icon-angle-right"></i>--}}
        {{--</li>--}}
        {{--<li><a href="#">Dashboard</a></li>--}}
    {{--</ul>--}}
    {{--row 1--}}
    {{--<div class="row-fluid">--}}

        {{--<div class="span8 widget blue" onTablet="span7" onDesktop="span8">--}}

            {{--<div id=""  style="height:282px" >--}}
                {{--<h1>School: </h1>--}}
                {{--<h2>Due Date:</h2>--}}
                {{--<h2>Topic:</h2>--}}

            {{--</div>--}}

        {{--</div>--}}

        {{--<div class=" span4 widget green" onTablet="span5" onDesktop="span4" id="calendar">--}}
            {{--<div id="calendar">--}}
            {{--{!! $calendar->calendar() !!}--}}
            {{--{!! $calendar->script() !!}--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}

        {{--</div>--}}

    </div>

    {{--row 2--}}
    <div class="row-fluid">

        <div class="span8 widget blue" onTablet="span7" onDesktop="span8">

            <div id=""  style="height:282px" >
                <h1>School: </h1>
                <h2>Due Date:</h2>
                <h2>Topic:</h2>
            </div>

        </div>



        <div class="box black span4 noMargin" onTablet="span12" onDesktop="span4">
            <div class="box-header">
                <h2><i class="halflings-icon white check"></i><span class="break"></span>To Do List</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <div class="todo metro">
                    <ul class="todo-list">
                        <li class="red">
                            <a class="action icon-check-empty" href="#"></a>
                            Windows Phone 8 App
                            <strong>today</strong>
                        </li>
                        <li class="red">
                            <a class="action icon-check-empty" href="#"></a>
                            New frontend layout
                            <strong>today</strong>
                        </li>
                        <li class="yellow">
                            <a class="action icon-check-empty" href="#"></a>
                            Hire developers
                            <strong>tommorow</strong>
                        </li>
                        <li class="yellow">
                            <a class="action icon-check-empty" href="#"></a>
                            Windows Phone 8 App
                            <strong>tommorow</strong>
                        </li>
                        <li class="green">
                            <a class="action icon-check-empty" href="#"></a>
                            New frontend layout
                            <strong>this week</strong>
                        </li>
                        <li class="green">
                            <a class="action icon-check-empty" href="#"></a>
                            Hire developers
                            <strong>this week</strong>
                        </li>
                        <li class="blue">
                            <a class="action icon-check-empty" href="#"></a>
                            New frontend layout
                            <strong>this month</strong>
                        </li>
                        <li class="blue">
                            <a class="action icon-check-empty" href="#"></a>
                            Hire developers
                            <strong>this month</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    {{--row 3--}}
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon white calendar"></i><span class="break"></span>Calendar</h2>
        </div>
        <div class="box-content">
            <div id="external-events" class="span3 hidden-phone hidden-tablet">
                <h4>Draggable Events</h4>
                <div class="external-event badge">Default</div>
                <div class="external-event badge badge-success">Completed</div>
                <div class="external-event badge badge-warning">Warning</div>
                <div class="external-event badge badge-important">Important</div>
                <div class="external-event badge badge-info">Info</div>
                <div class="external-event badge badge-inverse">Other</div>
                <p>
                    <label for="drop-remove"><input type="checkbox" id="drop-remove" /> remove after drop</label>
                </p>
            </div>

            <div id="calendar" class="span9"></div>

            <div class="clearfix"></div>
        </div>
    </div>
</div><!--/row-->

@stop