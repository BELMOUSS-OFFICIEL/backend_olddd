<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./logo-removebg.png" rel="icon">

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-icons-1.10.5/font/bootstrap-icons.min.css')); ?>" />
    <?php echo $__env->yieldContent('css'); ?>
    <title>SemsarNet | <?php echo $__env->yieldContent('title'); ?> Admin</title>


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <?php echo $__env->make('layout.siadBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content">
            <?php echo $__env->make('layout.nevBare', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>








    <script src="<?php echo e(asset('js/jquery-3.6.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /**PATH C:\Users\PC\Desktop\backend\resources\views/layout/master.blade.php ENDPATH**/ ?>