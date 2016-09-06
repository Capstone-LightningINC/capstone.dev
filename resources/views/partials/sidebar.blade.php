<div class="nav-collapse sidebar-nav">
    <ul class="nav nav-tabs nav-stacked main-menu">
        <li><a href="{{ action('HomeController@profile') }}"><i class="icon-user"></i><span class="hidden-tablet"> Profile</span></a></li>
        <li><a href="{{ action('HomeController@activities') }}"><i class="icon-star"></i><span class="hidden-tablet"> Activities</span></a></li>
        <li><a href="{{ action('SchoolsController@search') }}"><i class="icon-file"></i><span class="hidden-tablet"> Schools</span></a></li>
        <li><a href="{{ action('HomeController@studentTasks') }}"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
        <li><a href="{{ action('HomeController@myEssays') }}"><i class="icon-folder-open"></i><span class="hidden-tablet"> Essays</span></a></li>
    </ul>
</div>