<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <title></title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script type="text/javascript" src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    {{--<script type="text/javascript" src="{{asset('assets/js/bootstrap-filestyle.min.js')}}"></script>--}}



</head>
<body>

<header id="header_wrapper_admin">
    @yield('logout')0
    @yield('header')

    @include('site.errors')


    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
</header>

<div  class="container">
    <div class="row">
        <div class="col-sm-2">
            @yield('menu')
        </div>
        <div class="col-sm-10">
            @yield('content')
        </div>
    </div>



</div>



</body>
</html>
