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
            <?php $__currentLoopData = $list['wea']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="https://www.tianqi.com/wuhan/" target="_blank"><?php echo e($key); ?>: <?php echo e($value); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <div id="content">
        <ul>
            <?php $__currentLoopData = $list['articles']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="margin: 50px 0;">
                    <div class="title">
                        <a href="<?php echo e($v); ?>" target="_blank">
                            <h4><?php echo e($k); ?></h4>
                        </a>
                    </div>
                    
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</body>
<hr />
<footer style="text-align: center;">
    <p>Design by Yujie <a href="http://www.miitbeian.gov.cn/" target="_blank">鄂B1</a> <a href="/">网站统计</a></p>
</footer>
</html>