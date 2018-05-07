<!DOCTYPE html>
<html lang="en">
<head>
<body>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
    <div id="title" style="text-align: center;">
        <h1>武汉新鲜事</h1>
        <div style="padding: 5px; font-size: 16px;">楼市板块</div>
    </div>
    <hr />
    <div>
        <ul style="float: right;">
            @foreach($list['wea'] as $key=>$value)
                <li><a href="https://www.tianqi.com/wuhan/" target="_blank">{{$key}}: {{$value}}</a></li>
            @endforeach
        </ul>
    </div>
    <div id="content">
        <ul>
            @foreach ($list['articles'] as $k=>$v)
                <li style="margin: 50px 0;">
                    <div class="title">
                        <a href="{{$v}}" target="_blank">
                            <h4>{{ $k }}</h4>
                        </a>
                    </div>
                    {{--<div class="body">
                        <p>{{ $article->body }}</p>
                    </div>--}}
                </li>
            @endforeach
        </ul>
    </div>
</body>
<hr />
<footer style="text-align: center;">
    <p>Design by Yujie <a href="http://www.miitbeian.gov.cn/" target="_blank">鄂B1</a> <a href="/">网站统计</a></p>
</footer>
</html>