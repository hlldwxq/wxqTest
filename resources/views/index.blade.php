@extends('layouts/app')

@section('title', '首页')

@section('addLinks')
    <style>
        img {
            width: 100%;
        }
        .myimg{
            padding: 10px 15px;;
        }
        .mycontainer{
            width:80%;
            margin:0 auto;
            text-align: left;
        }
        form{
            padding-right: 15px;
            width:50%;
        }
        h4 {
            color:#f87217;
        }
        h3{

            padding:5px;
            color:white;
            background-color: #f87217;
        }
        .sale{
            margin:2% 0;
            padding-bottom: 5px;
            border:1px solid  #f87217;
        }
    </style>
@stop

@section('main-content')
    <div class="container mycontainer">
        <div class="row clearfix">
            <h4>环保纸袋</h4>
            @if(isset($bags['1']))
                <div class="img-container row">
                    @foreach($bags['1'] as $bag)
                        <div class="col-md-2 myimg">
                            <a href="{{ url('bag/' . $bag->id) }}">
                                <img src="{{ url($bag->img_url) }}" alt="">
                                这里是描述
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                暂无改该类型的袋子
            @endif
        </div>
        <div class="row clearfix">
            <h4>布袋</h4>
            @if(isset($bags['2']))
                <div class="img-container row">
                    @foreach($bags['2'] as $bag)
                        <div class="col-md-2 myimg">
                            <a href="{{ url('bag/' . $bag->id) }}">
                                <img src="{{ url($bag->img_url) }}" alt="">
                                这里是描述
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                暂无改该类型的袋子

            @endif
        </div>
        <div class="row clearfix">
            <h4>尼龙袋</h4>
            @if(isset($bags['3']))
                <div class="img-container row">
                    @foreach($bags['3'] as $bag)
                        <div class="col-md-2 myimg">
                            <a href="{{ url('bag/' . $bag->id) }}">
                                <img src="{{ url($bag->img_url) }}" alt="">
                                这里是描述
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                暂无改该类型的袋子
            @endif
        </div>
        <div class="row clearfix">
            <h4>保温袋</h4>
            @if(isset($bags['4']))
                <div class="img-container row">
                    @foreach($bags['4'] as $bag)
                        <div class="col-md-2 myimg">
                            <a href="{{ url('bag/' . $bag->id) }}">
                                <img src="{{ url($bag->img_url) }}" alt="">
                                这里是描述
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                暂无改该类型的袋子
            @endif
        </div>
        <div class="row clearfix">
            <h4>丽新布袋</h4>
            @if(isset($bags['5']))
                <div class="img-container row">
                    @foreach($bags['5'] as $bag)
                        <div class="col-md-2 myimg">
                            <a href="{{ url('bag/' . $bag->id) }}">
                                <img src="{{ url($bag->img_url) }}" alt="">
                                这里是描述
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                暂无改该类型的袋子
            @endif
        </div>
        <div class="row clearfix sale">
            <div class="col-md-12">
                <h3>快速報價</h3>
                <form role="form">
                    <div class="form-group">
                        <label>數量</label><input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label>郵箱</label><input type="email" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-danger">報價</button>
                </form>
            </div>
        </div>
    </div>
@stop