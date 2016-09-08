@extends('layouts.master')

@section('content')

<body class="error503">
    <div class="container" style="margin-top:5%;">
        <div class="row error503">
          <h1 class="text-center error503" alt="error503 image">Error 503</h1>
            <p>Down for maintenance! ¯\_(ツ)_/¯</p>
            <p>We'll be right back!</p>
            <center><div class="btn-group" style="margin-top:50px;">
             <a href="/profile/{id}"><button class="btn btn-lg register error503">Go Back</button></a>

            </div></center>
        </div>
    </div>
</body>
@stop