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
    <div class="row-fluid">

        <div class="span8 widget blue" onTablet="span7" onDesktop="span8">

            <div id="stats-chart2"  style="height:282px" >
                <h1>Name of Task: </h1>
                <h2>Due Date:</h2>
                <h2>Description:</h2>

            </div>

        </div>

        <div class=" span4 widget green" onTablet="span5" onDesktop="span4" id="">
            <div id="">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
            </div>
            <div class="clearfix"></div>

        </div>

    </div>

    {{--row 2--}}
    <div class="row-fluid">

        <div class="span8 widget blue" onTablet="span7" onDesktop="span8">

            <div id="stats-chart2"  style="height:282px" >
                <h1>Name of Task: </h1>
                <h2>Due Date:</h2>
                <h2>Description:</h2>
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
    <div class="row-fluid">

        <div class="row-fluid">

            <div class="span8 widget blue" onTablet="span7" onDesktop="span8">

                <div id="stats-chart2"  style="height:282px" >
                    <h1>Name of Task: </h1>
                    <h2>Due Date:</h2>
                    <h2>Description:</h2>
                </div>

            </div>

        </div>

    </div>

@stop