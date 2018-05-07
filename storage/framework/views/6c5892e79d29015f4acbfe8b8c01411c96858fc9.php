<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">选你喜欢</div>

                    <div class="panel-body">

                        <a href="<?php echo e(url('/blog')); ?>" class="btn btn-lg btn-success col-xs-12">个人博客</a>
                        <a href="<?php echo e(url('/')); ?>" class="btn btn-lg btn-success col-xs-12">吐槽天地</a>
                        <a href="<?php echo e(url('/game')); ?>" class="btn btn-lg btn-success col-xs-12">五子棋对战</a>
                        <a href="<?php echo e(url('/')); ?>" class="btn btn-lg btn-success col-xs-12">学习资料</a>
                        <a href="<?php echo e(url('/wuhan')); ?>" class="btn btn-lg btn-success col-xs-12">武汉新鲜事</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>