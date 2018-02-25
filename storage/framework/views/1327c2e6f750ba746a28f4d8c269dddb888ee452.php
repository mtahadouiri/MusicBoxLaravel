<!DOCTYPE html>

<html>

<head>

    <title>Laravel 5.5 image upload example</title>

    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">

</head>

<body>

<div class="container">

    <div class="panel panel-primary">

        <div class="panel-heading"><h2>Laravel 5.5 image upload example</h2></div>

        <div class="panel-body">



            <?php if($message = Session::get('success')): ?>

                <div class="alert alert-success alert-block">

                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong><?php echo e($message); ?></strong>

                </div>

                <img src="images/<?php echo e(Session::get('image')); ?>">

            <?php endif; ?>



            <?php if(count($errors) > 0): ?>

                <div class="alert alert-danger">

                    <strong>Whoops!</strong> There were some problems with your input.

                    <ul>

                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <li><?php echo e($error); ?></li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>

                </div>

            <?php endif; ?>



            <?php echo Form::open(array('route' => 'image.upload.post','files'=>true)); ?>


            <div class="row">

                <div class="col-md-6">

                    <?php echo Form::file('image', array('class' => 'form-control')); ?>


                </div>

                <div class="col-md-6">

                    <button type="submit" class="btn btn-success">Upload</button>

                </div>

            </div>

            <?php echo Form::close(); ?>




        </div>

    </div>

</div>

</body>

</html>