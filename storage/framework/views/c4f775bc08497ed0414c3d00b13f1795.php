<?php $__env->startSection('res'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4 ">


            <?php if(isset($error)): ?>
                <?php if($error == 'bien modifier'): ?>
                    <div class="alert alert-success  alert-dismissible fade show" role="alert">
                        <?php echo e($error); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <?php if($error == 'il n\'a pas été modifié!'): ?>
                    <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                        <?php echo e($error); ?>

                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                    <?php echo e($error); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                
            <?php endif; ?>
            <h4>


                Details de reservation de <span class="text-primary"><?php echo e($reservation->profile->nom); ?>

                    <?php echo e($reservation->profile->prenom); ?></span>
            </h4>

            <div class="gap-3 d-md-flex">
                <div class="table-responsive col-md-6">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">

                        <tr class="text-white">

                            <th scope="col">Date debut</th>
                            <td scope="row"><?php echo e($reservation['dateDebut']); ?></td>

                        </tr>
                        <tr class="text-white">
                            <th scope="col">Date fin</th>
                            <td scope="row"><?php echo e($reservation['dateFin']); ?></td>
                        </tr>



                        <tr class="text-white">
                            <th scope="col">preprieter</th>
                            <td scope="row"><?php echo e($reservation['immobiliere']->nom); ?></td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">propritaire</th>
                            <td scope="row"><?php echo e($reservation['immobiliere']->proprietaire->nom); ?>

                                <?php echo e($reservation['immobiliere']->proprietaire->prenom); ?></td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">Telephon</th>
                            <td scope="row"><?php echo e($reservation['immobiliere']->proprietaire->tele); ?> </td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">email</th>
                            <td scope="row"><?php echo e($reservation['immobiliere']->proprietaire->email); ?></td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">client</th>
                            <td scope="row"><?php echo e($reservation->profile->nom); ?> <?php echo e($reservation->profile->prenom); ?></td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">Telephon</th>
                            <td scope="row"><?php echo e($reservation->profile->tele); ?> </td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">email</th>
                            <td scope="row"><?php echo e($reservation->profile->tele); ?></td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">nombre perssonnes</th>
                            <td scope="row"><?php echo e($reservation['nbPerssonnes']); ?></td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">relation</th>
                            <td scope="row"><?php echo e($reservation['reservationsrolation']->rolation); ?></td>
                        </tr>




                    </table>
                </div>


                <?php if(isset($valider)): ?>
                    <?php if($valider == 1): ?>
                        <div class="mt-5">
                            <h5>Modifier la date de reservation</h5>

                            <form action="<?php echo e(route('reservations.update', $reservation->id)); ?>" method="post"
                                class="d-flex gap-3">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="date" class="form-control" name="dateDebut"
                                    value="<?php echo e($reservation['dateDebut']); ?>">
                                <input type="date" class="form-control" name="dateFin"
                                    value="<?php echo e($reservation['dateFin']); ?>">

                                <input type="submit" value="Modifier" class="btn btn-primary">


                            </form>



                            <div class="mt-5 ">
                                <h5>controler la reservation</h5>
                                <div class="d-flex justify-content-between">


                                    <div class="d-flex gap-4">
                                        <form action="<?php echo e(route('reservations.update', $reservation->id)); ?>" method="post"
                                            class="d-flex gap-3">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
                                            <input type="hidden" name="etate" value="valide">
                                            <input class="btn btn-success" type="submit" value="Valide">
                                        </form>


                                        <form action="<?php echo e(route('reservations.destroy', $reservation->id)); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <input class="btn btn-danger" type="submit" value="Refuser ">
                                        </form>
                                    </div>
                                    <a href="<?php echo e(route('reservations.index')); ?>" class="text-warning">Retour</a>
                                </div>
                            </div>
                        </div>
                    <?php elseif($valider == 0): ?>
                        <div class="mt-5 ">

                            <h1 class=" bg-primary px-1 py-3 text-secondary">la reservation est valider</h1>
                           <div class="d-flex justify-content-between align-items-center">
                            <form action="<?php echo e(route('reservations.destroy', $reservation->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input class="btn btn-danger" type="submit" value="Refuser ">
                            </form>
                            <a href="<?php echo e(route('reservations.index')); ?>" class="btn btn-warning">Retour</a>
                           </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>





            </div>

        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\projet\backend\resources\views/pages/reservations/show.blade.php ENDPATH**/ ?>