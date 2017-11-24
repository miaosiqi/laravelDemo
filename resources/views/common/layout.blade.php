<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title')</title>
    <style>
        @section('css')

        @show
    </style>
</head>
<body>
@section('header')
<header class="jumbotron">
    <div class="container-fluid">
        <h1><i class="fa fa-fw fa-drupal"></i>轻松学会laravel</h1>
        <kbd>玩转laravel表单</kbd>
    </div>
</header>
@show
<main class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @section('sidebar')
                <div class="list-group">
                <a href="{{url('Student/lst')}}" class="list-group-item active">
                    <i class="fa fa-fw fa-users"></i> 学生列表
                </a>
                <a href="{{url('Student/create')}}" class="list-group-item">
                    <i class="fa fa-fw fa-plus"></i> 新增学生
                </a>
            </div>
            @show
        </div>
        <div class="col-md-10">
            @include('common.validator')
            @include('common.msg')
            @yield('content')
        </div>
    </div>
</main>
@section('footer')
<footer class="container-fluid">
    <i class="fa fa-fw fa-copyright"></i> 2016 imooc
</footer>
@show
</body>
</html>
<script src="{{asset('js/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>
@section('js')
    <script>
        $(function(){

        });
    </script>
@show