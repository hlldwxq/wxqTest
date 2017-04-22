<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    @include('../partials/links')

    @yield('addLinks')
</head>
<link rel="stylesheet" href="{{url('css/index.css')}}">
<body>
    <div class="container">
        <div class="myheader">
            <span class="style1">LOGO</span>
            <span class="style2">&nbsp; &nbsp;紙袋逹人</span>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#">首页</a>
                    </li>
                    <li>
                        <a href="#">公司簡介</a>
                    </li>
                    <li>
                        <a href="#">INKJET</a>
                    </li>
                    <li>
                        <a href="#">服務產品</a>
                    </li>
                    <li>
                        <a href="#">如何落單</a>
                    </li>
                    <li>
                        <a href="#">聯絡我們</a>
                    </li>
                    <li class="dropdown pull-right">
                        @if(isset(Auth::user()->name))
                            <a href="{{ url('auth/logout') }}">{{ Auth::user()->name }}</a>
                        @else
                            <button class="btn btn-danger glyphicon glyphicon-user"></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('auth/login') }}">登錄</a>
                                </li>
                                <li>
                                    <a href="{{ url('auth/register') }}">註冊</a>
                                </li>
                            </ul>

                        @endif
                    </li>
                </ul>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-xs-12">
                <ul class="nav nav-pills">
                    <li>
                        <a href="#">布织布袋</a>
                    </li>
                    <li>
                        <a href="#">纸袋</a>
                    </li>
                    <li>
                        <a href="#">覆膜袋</a>
                    </li>
                    <li>
                        <a href="#">棉布/帆布袋</a>
                    </li>
                    <li>
                        <a href="#">尼龙环保袋</a>
                    </li>
                    <li>
                        <a href="#">保温袋</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @yield('main-content')

    @include('../partials/scripts')

    @yield('addScripts')
</body>
</html>