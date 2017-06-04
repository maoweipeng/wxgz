<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>图书详情</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
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
            height: 500px;
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
        @media screen and (min-width:1200px){
            .con{
                margin: auto;
                width: 80%;
                height: 500px;
            }
        }
        @media screen and (min-width: 960px) and (max-width: 1199px) {
            .con{
                margin: auto;
                width: 80%;
                height: 500px;
            }
        }
        @media screen and (min-width: 768px) and (max-width: 959px) {
            .con{
                margin: auto;
                width: 80%;
                height: 500px;
            }
        }
        @media only screen and (min-width: 480px) and (max-width: 767px){
            .con{
                margin: auto;
                width: 100%;
                height: 500px;
            }
        }
        @media only screen and (max-width: 479px) {
            .con{
                margin: auto;
                width: 100%;
                height: 500px;
            }
        }
        .gc{
            width: 100%;
            height: 40px;
            padding-top: 3px;
            background-color: #2aabd2;
            text-align: center;
            color: black;
            font-size: 1.8em;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>图书详情</h1>
<div class="con">
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td class="left">
                <div class="img">
                    <img src="/result.png" alt="">
                </div>
            </td>
            <td class="right">
                <h3>{{$look->id}}</h3>
                <p>著者:
                    <span>David Sklar，Adam Tracbtenberg著</span>
                </p>
                <p>出版社:
                    <span>中国电力出版社,2015</span>
                </p>
                <p>文献类型:
                    <span>{{$look->Naname}}</span>
                </p>
            </td>
        </tr>
        </tbody>
    </table>
    <p class="gc">馆藏列表</p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>条形码</th>
            <th>馆藏状态</th>
            <th>应还时间</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tanmay</td>
            <td>Bangalore</td>
            <td>2017-12-31</td>
        </tr>
        <tr>
            <td>Sachin</td>
            <td>Mumbai</td>
            <td>400003</td>
        </tr>
        <tr>
            <td>Uma</td>
            <td>Pune</td>
            <td>411027</td>
        </tr>
        </tbody>
    </table>
</div>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/首页.js"></script>
</body>
</html>