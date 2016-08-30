<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
<header class="row">
    @include('partials.header')
</header>
<div class="container">
    @include('partials.sidebar')

    @yield('content')

</div>

@include('partials.scripts')
</body>
</html>