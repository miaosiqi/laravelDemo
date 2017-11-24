<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>标题@yield('title')</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        html{
            background: #dfdfdf;
        }
        body{
            width:1024px;
            margin:0 auto;
            background: #fff;
            box-shadow: inset 0 0 0 8px rgba(0,0,0,.6);
        }
        header,
        footer,
        section.sidebar,
        main{
            margin-bottom:10px;
        }
        header,
        footer{
            width: 100%;
            height: 100px;
            background: #ccc;
            float: left;
        }
        section.sidebar,
        main{
            height: 600px;
        }
        section.sidebar{
            float: left;
            width: 150px;
            background: rgba(0,0,0,.3);
        }
        main{
            float: left;
            width: 874px;
            background: rgba(0,0,0,.2);
        }
    </style>
</head>
<body>
    <header>
        @section('header')
            头部
        @show
    </header>


    <section class="sidebar">
        @section('sidebar')
            侧栏
        @show
    </section>

    <main>
        @yield('main', '主体')
    </main>

    <footer>
        @section('footer')
            尾部
        @show
    </footer>

</body>
</html>