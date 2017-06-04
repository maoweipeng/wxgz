<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜索结果</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="/css/首页.css">
    <script src="/js/jquery.js" type="text/javascript"></script>
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
            margin: auto;
            width: 80%;
            max-width: 600px;
            height: 500px;
            border: 1px solid red;
            min-width: 596px;
        }
        .result{
            width: 100%;
            height: 150px;
            border-bottom: 1px solid black;
        }
        .result-left{
            width: 20%;
            height: 130px;
            margin-top: 10px;
            margin-bottom: 10px;
            border: 1px solid green;
            float: left;
        }
        .result-right{
            width: 80%;
            height: 130px;
            margin-top: 10px;
            margin-bottom: 10px;
            border: 1px solid blue;
            float: left;
        }
        .left{
            width: 100px;
        }
        .left,.right{
            height: 130px;
        }
        .img{
            width: 100px;
            height: 120px;
            position: relative;
            top:15%;
        }
    </style>
</head>
<body>
<h1>搜索结果</h1>
@foreach($user as $users)
<div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="left">
                <div class="img">
                    <img src="/result.png" alt="">
                </div>
            </td>
            <td class="right">
                <h3><a href="{{url('result',$users->id)}}">学号:{{$users->id}}</a></h3>
                <p>著者:
                    <span>David Sklar，Adam Tracbtenberg著</span>
                </p>
                <p>出版社:
                    <span>中国电力出版社,2015</span>
                </p>
                <p>文献类型:
                    <span>{{$users->Naname}}</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/首页.js"></script>
@endforeach
<div style="width:370px ">
    @if(($count1/10)>1)
        <div style="width: 49px;height: 65px;padding-top: 27px;float: left;">
            上一页
        </div>
        <div style="width: 165px;/*border: 1px solid red;*/height: 65px;float: left;">
            {!! $user->appends(array('keyname' => $user->title))->links() !!}
        </div>
        <div style="width: 49px;height: 65px;padding-top: 27px;float: left;">
            下一页
        </div>
        @endif
    @if($count1>0)
    <div style="width: 105px;height: 65px;padding-top: 27px;float: left;">
         (第{!! $user->currentPage() !!}页) 共{!! ceil($count1 /5)!!}页
    </div>
    @else
        无记录
    @endif
</div>

</body>
</html>