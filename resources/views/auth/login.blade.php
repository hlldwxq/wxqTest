<!doctype html>
@include('../partials/links')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if(isset($errors))
    @foreach($errors as $error)
        <li>{{ $error }}</li>

    @endforeach
@endif
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <form action="{{ url('auth/login') }}" method="post" class="form-horizontal">
            {!! csrf_field() !!}
            <h3 class="heading" style="text-align:center;">用 戶 登 錄</h3>
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="email2" placeholder="用戶名或電子郵件">
            </div>
            <div class="form-group ">
                <input type="password" name="password" class="form-control" id="password" placeholder="密碼">
            </div>
            <div class="form-group row">
                <div class="col-md-10"></div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-info">登 錄</button>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    .form-horizontal .btn{
        float: right;
        font-size: 14px;
        color: #fff;
        background: #00b4ef;
        border-radius: 30px;
        padding: 10px 25px;
        border: none;
        text-transform: capitalize;
        transition: all 0.5s ease 0s;
    }
</style>
</body>
</html>