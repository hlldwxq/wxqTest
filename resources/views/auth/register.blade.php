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
<div class="container" id="register">
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
            <form action="{{ url('auth/register') }}" method="post" class="form-horizontal">
                {!! csrf_field() !!}
                <h3 class="heading" style="text-align:center;">用 戶 註 冊</h3>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email1" placeholder="用戶名或電子郵件">
                </div>
                <div class="form-group ">
                    <input type="text" name="name" class="form-control"  placeholder="請輸入用戶名">
                </div>
                <div class="form-group ">
                    <input type="password" name="password" class="form-control" id="password1"  placeholder="請輸入密碼">
                </div>
                <div class="form-group ">
                    <input type="password" name="password_confirmation" class="form-control" id="password2" placeholder="請再次輸入密碼">
                </div>

                <div class="form-group row">
                    <div class="col-md-10"></div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-info" id="btn-register">註冊</button>
                    </div>
                </div>
            </form>
        </div>
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
<script>

    $("#btn-register").bind('click',function(event) {
        var pwd1=$("#password1");
        var pwd2=$("#password2");
        if(pwd2.val() != pwd1.val() ) {
            alert("兩次密碼輸入不一致，請重新輸入！")
            event.stopPropagation()
            return false;
        }
    });


</script>
</body>
</html>