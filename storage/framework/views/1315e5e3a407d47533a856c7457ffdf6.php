<?php $__env->startSection('res'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary rounded p-4">

            <div class="d-flex justify-content-between pe-5 pb-3">
                <h6 class="mb-0">les réservations d'achat</h6>
                <ul class="nav nav-pills d-inline-flex justify-content-between">

                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary" href="<?php echo e(route('reservations.index')); ?>">Location</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary active" href="">Acheter</a>
                    </li>

                </ul>
            </div>



            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-white">
                            <th scope="col">#</th>
                            <th scope="col">Date reservation</th>
                            <th scope="col">Immobiliere</th>
                            <th scope="col">proprietaire</th>
                            <th scope="col">telephone</th>
                            <th scope="col">client</th>
                            <th scope="col">telephpn</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $__currentLoopData = $achates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $achate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($achate->id); ?></td>
                                <td><?php echo e($achate->dateReservation); ?></td>
                                <td><?php echo e($achate['immobiliere']->nom); ?></td>
                                <td><?php echo e($achate['immobiliere']->proprietaire->nom); ?>

                                    <?php echo e($achate['immobiliere']->proprietaire->prenom); ?></td>
                                <td><?php echo e($achate['immobiliere']->proprietaire->tele); ?> </td>
                                <td><?php echo e($achate->profile->nom); ?> <?php echo e($achate->profile->prenom); ?></td>
                                <td><?php echo e($achate->profile->tele); ?></td>
                                <td class="d-flex justify-content-between">
                                    <form action="<?php echo e(route('achates.destroy', $achate->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="bi bi-check-circle btn-sm me-1 btn-success " type="submit"></button>
                                    </form>
                                    <form action="<?php echo e(route('achates.destroy', $achate->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="bi bi-trash btn-sm me-1 btn-danger " type="submit"></button>
                                    </form>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\projet\backend\resources\views/pages/reservations/achat.blade.php ENDPATH**/ ?>