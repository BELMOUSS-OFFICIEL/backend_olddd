

    <!-- Favicon -->
    

    <!-- Google Web Fonts -->
    

    <!-- Icon Font Stylesheet -->
    

    <!-- Libraries Stylesheet -->
    

    <!-- Customized Bootstrap Stylesheet -->
    

    <!-- Template Stylesheet -->
    



        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        


                        


                        
        <!-- Sign Up End -->
    

    <!-- JavaScript Libraries -->
    

    <!-- Template Javascript -->
    

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('bootstrap-icons-1.10.5/font/bootstrap-icons.min.css')); ?>" />
    <?php echo $__env->yieldContent('css'); ?>
    <title>Document</title>


</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="container-fluid pt-4 px-4">
            <div class="row vh-100 bg-secondary rounded align-items-center justify-content-center mx-0">
                <div class="col-md-6 text-center p-4">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1 fw-bold">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website!
                        Maybe go to our home page or try to use a search?</p>
                        
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="<?php echo e(route('login')); ?>"
                                            >
                                                <?php echo e(__('OK')); ?>

                                            </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(asset('js/jquery-3.6.4.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

<?php echo $__env->yieldContent('js'); ?>
</body>

</html>

<?php /**PATH C:\Users\PC\Desktop\backend\resources\views/auth/register.blade.php ENDPATH**/ ?>