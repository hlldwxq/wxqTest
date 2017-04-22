@extends('layouts/app')

@section('title', '商品详情')

@section('main-content')
    <link  rel="stylesheet" type="text/css" href="{{ url('css/show.css') }}">
    <div class="row clearfix">
        <div class="col-md-5 column">
            <img src="{{ url($bag->img_url) }}" alt="">
        </div>
        <div class="col-md-7 column">
            <p class="name">產品名稱</p>
            <p class="introduce">產品詳情</p>
            <ul class="list-unstyled">
                <li>
                    布料：
                </li>
                <li>
                    尺寸：
                </li>
                <li>
                    顏色：
                </li>
                <li>
                    印刷：
                </li>
                <li>
                    加工：
                </li>
                <li>
                   <a href="{{ url('quotes/' . $bag->id) }}"><button class="btn btn-danger">報價</button></a>
                </li>

            </ul>
        </div>
    </div>

@stop