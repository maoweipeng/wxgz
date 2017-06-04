<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录界面</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/首页.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <style type="text/css">
        h1{
            text-align: center;
            width: 100%;
            background-color: #2aabd2;
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .con{
            padding-top: 80px;
            margin: auto;
            width: 80%;
            max-width: 600px;
            height: 500px;
            /*border: 1px solid red;*/
        }
        .input-bottom{
            margin-bottom: 30px;
        }
        .btn{
            width: 100%;
            height: 46px;
        }
    </style>
</head>
<body>
{!! Form::open(['url'=>'/binding','class'=>'search-form']) !!}
    <h1>用户登录</h1>
    <div class="con">
        <label for="name">请输入读者账户</label>
        <div class="input-group input-group-lg input-bottom">
            <span class="input-group-addon" id="sizing-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
        </div>

        <label for="name">请输入读者密码</label>
        <div class="input-group input-group-lg input-bottom">
            <span class="input-group-addon" id="sizing-addon1">@</span>
            <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1">
        </div>
        <button type="submit" class="btn btn-primary">登录</button>
    </div>

{!! Form::close() !!}
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/首页.js"></script>
</body>
</html>