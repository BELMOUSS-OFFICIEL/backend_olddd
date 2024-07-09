<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="/" class="navbar-brand mx-4 mb-3">
        <!-- <img src="<?php echo e(asset('logo-removebg.png')); ?>" alt="" width="100px"> -->
            <h3 class="text-primary"><i class="me-2"></i>LuxeImmoKech</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?php echo e(asset('img/admin.jpg')); ?>" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">  <?php echo e(Auth::user()->name); ?></h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link <?php echo $__env->yieldContent('dash'); ?>  mb-3"><i
                    class="bi bi-house-fill me-2"></i>Dashboard</a>

            <a href="<?php echo e(route('reservations.index')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('res'); ?> mb-3"><i
                    class="bi bi-table me-2"></i>reservations</a>
            <a href="<?php echo e(route('immobiliers.index')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('imm'); ?> mb-3"><i
                    class="bi bi-bag  me-2"></i>Immobilieres</a>
            <a href="<?php echo e(route('immobiliers.create')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('ajo'); ?> mb-3"><i
                    class="bi bi-bag-plus me-2"></i>Ajouter</a>
            <a href="<?php echo e(route('reviews.index')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('com'); ?> mb-3"><i
                    class="bi bi-emoji-smile me-2"></i>commontaires</a>

        </div>
    </nav>
</div>
<?php /**PATH C:\Users\hp\Desktop\MY_OMAR_PROJET_FINAL\backend\resources\views/layout/siadBar.blade.php ENDPATH**/ ?>