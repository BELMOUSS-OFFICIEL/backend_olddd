<?php $__env->startSection('res'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
<div class="bg-secondary text-center rounded p-4">

    <div class="d-md-flex justify-content-between pe-5 pb-3">
        <h6 class="mb-0">les réservations du location</h6>
        <ul class="nav nav-pills d-inline-flex justify-content-between">

            <li class="nav-item me-2">
                <a class="btn btn-outline-primary active"  href="">Location</a>
            </li>
            <li class="nav-item me-2">
                <a class="btn btn-outline-primary" href="<?php echo e(route('achates.index')); ?>">Acheter</a>
            </li>

        </ul>
       </div>

       <div class='d-flex justify-content-between my-3 px-4'>
          <h4>
          Tout les reservations <?php if(isset($active)): ?> <?php if($active!=0): ?>qui <span class="text-primary">  <?php echo e($reservations[0]->etate); ?></span> <?php endif; ?> <?php endif; ?> 
          </h4>


            <div class='text-end'>
              <a href="<?php echo e(route('reservations.filterEtate',0)); ?>" class='btn btn-outline-primary <?php if(isset($active)): ?> <?php if($active==0): ?> active <?php endif; ?> <?php endif; ?>"'>Tout</a>
              <a href="<?php echo e(route('reservations.filterEtate','en cours')); ?>" class="btn btn-outline-primary <?php if(isset($active)): ?> <?php if($active=='en cours'): ?> active <?php endif; ?> <?php endif; ?>">en coure</a>
              <a href="<?php echo e(route('reservations.filterEtate','valider')); ?>" class="btn btn-outline-primary <?php if(isset($active)): ?> <?php if($active=='valider'): ?> active <?php endif; ?> <?php endif; ?>">valider</a>
              <!-- <a href="" class='btn btn-outline-primary'>en coure</a> -->
            </div>



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
                <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($reservation['id']); ?></td>
                    <td><?php echo e($reservation['dateReservation']); ?></td>
                    <td><?php echo e($reservation['immobiliere']->nom); ?></td>
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
               <tr>
                <td colspan="8"> <?php echo e($reservations->links()); ?></td>
               </tr>

            </tbody>
        </table>
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\MY_OMAR_PROJET_FINAL\backend\resources\views/pages/reservations/index.blade.php ENDPATH**/ ?>