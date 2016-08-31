<!DOCTYPE html>
<html lang="en">
<head>
   @include('partials.head')
</head>
<body>
<header class="row">
   @include('partials.header2')
</header>
<div class="container">

   @yield('content')

</div>

@include('partials.scripts')
</body>
</html>