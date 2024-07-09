<?php $__env->startSection('res'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4 ">

        <h5>Modifier la date de reservation <span class="text-primary"><?php echo e($reservation->profile->nom); ?> <?php echo e($reservation->profile->prenom); ?></span>
        </h5>
        <form action="<?php echo e(route('reservations.update',$reservation->id)); ?>" method="post" class="d-flex gap-3">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <input type="date" class="form-control" name="dateDebut" value="<?php echo e($reservation['dateDebut']); ?>">
            <input type="date" class="form-control" name="dateFin" value="<?php echo e($reservation['dateFin']); ?>">

            <input type="submit" value="Modifier" class="btn btn-primary">


        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\projet\backend\resources\views/pages/reservations/edit.blade.php ENDPATH**/ ?>