<html lang="en">
<head>
    <meta name="viewport" charset="UTF-8" content="width=device-width" />
    <title>Title</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            $('#myCarousel').carousel({interval:3000});//每隔5秒自动轮播
        });
    </script>
</head>
<body>
<div class="title-and-logo">
    @if(Auth::check())
        <div class="title">欢迎您:{{$email}}</div>
    @else
        <div class="title">请先绑定用户</div>
    @endif
    <div class="logo">
        <div id="myCarousel" class="carousel slide">
            <!-- 轮播（Carousel）指标 -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- 轮播（Carousel）项目 -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/4.png" alt="First slide">
                </div>
                <div class="item">
                    <img src="img/5.png" alt="Second slide">
                </div>
                <div class="item">
                    <img src="img/9.png" alt="Third slide">
                </div>
            </div>
        </div>
        <!--<img src="img/滑稽1.png" class="img-responsive" alt="Cinque Terre" alt="">-->
    </div>
</div>
{!! Form::open(['url'=>'/result','class'=>'search-form']) !!}
{{--<form class="search-form" action="sql.php" method="post" name="registForm">--}}
    <div>
        <select name="" id="" class="select">
            <option value="作者">作者</option>
            <option value="书名">书名</option>
            <option value="关键字">关键字</option>
            <option value="ISBN">ISBN</option>
        </select>
    </div>
    <div class="search-text-box-wrapper">
        <input class="search-text-box" type="text" placeholder="请输入关键字" name="keyname">
    </div>
    <input type="submit" class="search-button" value="搜一下">
{!! Form::close() !!}
<!-- 搜索框 -->
<hr>
<div class="list">
    <table class="table table-bordered">
        <tr>
            <td>
                <a href="{{ route('login') }}" class="tda">
                    <div>
                        <img src="img/td1.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">绑定用户</span>
                </a>
            </td>
            <td>
                <a href="/personal" class="tda">
                    <div>
                        <img src="img/td2.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">个人资料</span>
                </a>
            </td>
            <td>
                <a href="" class="tda">
                    <div>
                        <img src="img/td3.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">二维码</span>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="" class="tda">
                    <div>
                        <img src="img/td4.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">搜索</span>
                </a>
            </td>
            <td>
                <a href="" class="tda">
                    <div>
                        <img src="img/td5.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">我的借阅</span>
                </a>
            </td>
            <td>
                <a href="" class="tda">
                    <div>
                        <img src="img/td6.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">图书转借</span>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="" class="tda">
                    <div>
                        <img src="img/td7.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">新书</span>
                </a>
            </td>
            <td>
                <a href="" class="tda">
                    <div>
                        <img src="img/td8.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">读者证挂失</span>
                </a>
            </td>
            <td>
                <a href="" class="tda">
                    <div>
                        <img src="img/td9.png" class="img-responsive" alt="">
                    </div>
                    <span class="tdad">图书续借</span>
                </a>
            </td>
        </tr>
    </table>
</div>

<!--代码-->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/首页.js"></script>
</body>
</html>
