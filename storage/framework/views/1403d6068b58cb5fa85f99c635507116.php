<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="" class="sidebar-toggler flex-shrink-0 ">
        <!-- <i class="bi bi-lightning-charge fs-4"></i> -->
        <img src="<?php echo e(asset('logo-removebg.png')); ?>" alt="" width="100%">
    </a>

    <div class="navbar-nav align-items-center ms-auto">

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="<?php echo e(asset('img/admin.jpg')); ?>" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">  <?php echo e(Auth::user()->name); ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\hp\Desktop\MY_OMAR_PROJET_FINAL\backend\resources\views/layout/nevBare.blade.php ENDPATH**/ ?>