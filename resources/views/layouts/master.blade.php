<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
        <!-- start: Header -->
    <div class="navbar">
        @include('partials.header1')
    </div>


    <div class="container-fluid-full">
    <div class="row-fluid">
            <!-- start: sidebar -->
        <div id="sidebar-left" class="span2">
            @include('partials.sidebar')
        </div>
            <!-- start: Content -->
        <div id="content" class="span10">
            @yield('content')
        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
    </div><!--/fluid-row-->


<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>

    </p>

</footer>


</body>
</html>