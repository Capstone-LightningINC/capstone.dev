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
        <span style="text-align:left;float:left">&copy; 2016 <a href="" alt="">College Go</a></span>

    </p>

</footer>

@include('partials.scripts')
@yield('scripts')
</body>
</html>