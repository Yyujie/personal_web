<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <title>五子棋对战</title>
    <style type="text/css">
        .box {
            width: 450px;
            height: 450px;
            margin: 50px auto;
        }
        canvas {
            display: block;
            box-shadow: 0px 0px 10px #ccc;
            background: url(/images/game.png) no-repeat center center;
            background-size: cover;
        }

    </style>
</head>

<body>
<div class="box"></div>
<div><input type="button" class="btn btn-lg btn-success col-xs-12" value="我要再战！" id="restart"/></div>
</body>
</html>
<script type="text/javascript" src="{{URL::asset('/js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('/js/game.js') }}"></script>
<script>

    /*
     * @param opts: {
     width: 默认450
     container: 父容器
     }
     */
    var gobang = new Gobang();
    gobang.init({
        container: '.box'
    })
</script>