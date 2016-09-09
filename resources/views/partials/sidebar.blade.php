<div class="nav-collapse sidebar-nav">
    @if(Auth::check())
        @if(Auth::user()->authority == 'student')
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li><a href="{{ action('HomeController@studentProfile') }}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                <li><a href="{{ action('HomeController@profile') }}"><i class="icon-user"></i><span class="hidden-tablet"> Profile</span></a></li>
                <li><a href="{{ action('HomeController@activities') }}"><i class="icon-star"></i><span class="hidden-tablet"> Activities</span></a></li>
                <li><a href="{{ action('SchoolsController@displayMySchools') }}"><i class="icon-heart"></i><span class="hidden-tablet"> My Schools</span></a></li>
                <li><a href="{{ action('HomeController@search') }}"><i class="icon-file"></i><span class="hidden-tablet"> Schools</span></a></li>
                <li><a href="{{ action('HomeController@studentTasks') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
                <li><a href="{{ action('HomeController@myEssays') }}"><i class="icon-folder-open"></i><span class="hidden-tablet"> Essays</span></a></li>
            </ul>
        @else
            <ul class="nav nav-tabs nav-stacked main-menu">
                <li><a href="{{ action('HomeController@studentProfile') }}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                <li><a href="{{ action('HomeController@profile') }}"><i class="icon-user"></i><span class="hidden-tablet"> Profile</span></a></li>
                <li><a href="{{ action('HomeController@activities') }}"><i class="icon-star"></i><span class="hidden-tablet"> Activities</span></a></li>
                <li><a href="{{ action('SchoolsController@displayMySchools') }}"><i class="icon-heart"></i><span class="hidden-tablet"> My Students</span></a></li>
                <li><a href="{{ action('HomeController@search') }}"><i class="icon-file"></i><span class="hidden-tablet"> Schools</span></a></li>
                <li><a href="{{ action('HomeController@studentTasks') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
            </ul>
        @endif
    @endif

</div>