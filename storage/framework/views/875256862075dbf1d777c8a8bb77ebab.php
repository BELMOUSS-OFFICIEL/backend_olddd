<?php $__env->startSection('dash'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 ps-3">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ps-2">
                    <p class="mb-2">Reservations en cours  </p>
                    <h6 class="mb-0"><?php echo e($reservationslengt->count()); ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4 ps-3">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ms-2">
                    <p class="mb-2">Achat en cours</p>
                    <h6 class="mb-0"><?php echo e($achatesLengts->count()); ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ms-2">
                    <p class="mb-2"> Immobilieres</p>
                    <h6 class="mb-0"><?php echo e($immobilier->count()); ?></h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="bi bi-alarm fs-2 text-primary"></i>
                <div class="ms-2">
                    <p class="mb-2">Utilisateurs</p>
                    <h6 class="mb-0"><?php echo e(count($profile)); ?></h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Nouvelles réservations du location</h6>
            <a href="<?php echo e(route('reservations.index')); ?>" class="text-primary">Voir plus</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">#</th>
                        <th scope="col">Date reservation</th>
                        <th scope="col">preprieter</th>
                        <th scope="col">proprietaire</th>
                        <th scope="col">telephone</th>
                        <th scope="col">client</th>
                        <th scope="col">telephpn</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if($reservations): ?>
                    <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($reservation['id']); ?></td>
                        <td><?php echo e($reservation['dateReservation']); ?></td>
                        <td><?php echo e($reservation->immobiliere->nom); ?></td>
                    <td><?php echo e($reservation['immobiliere']->proprietaire->nom); ?> <?php echo e($reservation['immobiliere']->proprietaire->prenom); ?></td>
                    <td><?php echo e($reservation['immobiliere']->proprietaire->tele); ?></td>
                    <td><?php echo e($reservation->profile->nom); ?> <?php echo e($reservation->profile->prenom); ?></td>
                    <td><?php echo e($reservation->profile->tele); ?></td>
                        <td class="d-md-flex justify-content-between">
                            <a class="bi bi-eye btn-sm me-1 btn-info" href="<?php echo e(route('reservations.show',$reservation['id'])); ?>"></a>
                            <a class="bi bi-pencil btn-sm me-1 btn-primary" href="<?php echo e(route('reservations.show',$reservation['id'])); ?>"></a>

                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>

    <div class="bg-secondary text-center rounded p-4 mt-3">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Nouvelles réservations d'achat</h6>
            <a href="<?php echo e(route('achates.index')); ?>" class="text-primary">Voir plus</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-white">
                        <th scope="col">#</th>
                        <th scope="col">Date reservation</th>
                        <th scope="col">preprieter</th>
                        <th scope="col">proprietaire</th>
                        <th scope="col">telephone</th>
                        <th scope="col">client</th>
                        <th scope="col">telephpn</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php if($achates): ?>
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

                    <?php endif; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Desktop\backend\resources\views/index.blade.php ENDPATH**/ ?>