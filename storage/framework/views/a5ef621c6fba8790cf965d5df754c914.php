<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>SemsarNet</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?php echo e(asset('img/user.jpg')); ?>" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link <?php echo $__env->yieldContent('dash'); ?> "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            
            <a href="<?php echo e(route('reservations.index')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('res'); ?>"><i class="fa fa-th me-2"></i>reservations</a>
            <a href="<?php echo e(route('immobiliers.index')); ?>" class="nav-item nav-link <?php echo $__env->yieldContent('imm'); ?>"><i class="fa fa-keyboard me-2"></i>Immobilieres</a>
            <a href="table.html" class="nav-item nav-link <?php echo $__env->yieldContent('ajo'); ?>"><i class="fa fa-table me-2"></i>Ajouter</a>
            <a href="chart.html" class="nav-item nav-link <?php echo $__env->yieldContent('com'); ?>"><i class="fa fa-chart-bar me-2"></i>commontaires</a>
          
        </div>
    </nav>
</div><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\backend\resources\views/layout/siadBar.blade.php ENDPATH**/ ?>