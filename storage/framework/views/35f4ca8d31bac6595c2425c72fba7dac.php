<?php $__env->startSection('res'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4 ">


            
            <h4>


                Details de reservation de <span class="text-primary"><?php echo e($reservation->profile->nom); ?>

                    <?php echo e($reservation->profile->prenom); ?></span>
            </h4>
            <?php if(session()->has('error')): ?>
<div class="alert <?php if(session('error')=='bien modifier'): ?>alert-success <?php else: ?> alert-danger <?php endif; ?> alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i><?php echo e(session('error')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>


<?php if(session()->has('success')): ?>
<div class="alert alert-success  alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i><?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
            <!-- <div class="gap-3 d-md-flex">
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





            </div> -->

            <div class='d-lg-flex'>

                    <div class="col-sm-12 col-lg-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Reservation</h6>
                            <table class="table table-bordered table-hover">
                              
                                <tbody>
                                    <tr class="text-white">
                                        <th scope="row">Date reservation</th>
                                        <td><?php echo e($reservation->dateReservation); ?></td>
                                        
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Date debut</th>
                                        <td><?php echo e($reservation->dateDebut); ?></td>
                                      
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Date fin</th>
                                        <td><?php echo e($reservation->dateFin); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Immobiliere</th>
                                        <td><?php echo e($reservation->immobiliere->nom); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Adresse</th>
                                        <td><?php echo e($reservation->immobiliere->adresse); ?></td>
                                    
                                    </tr>

                                    <tr class="text-white">
                                        <th scope="row">Sector</th>
                                        <td><?php echo e($reservation->immobiliere->sector); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Proprietaire</th>
                                        <td><?php echo e($reservation->immobiliere->proprietaire->nom); ?> <?php echo e($reservation->immobiliere->proprietaire->prenom); ?></td>
                                    
                                    </tr>

                                    <tr class="text-white">
                                        <th scope="row">CIN</th>
                                        <td><?php echo e($reservation->immobiliere->proprietaire->cin); ?></td>
                                    
                                    </tr>


                                    <tr class="text-white">
                                        <th scope="row">Telephone</th>
                                        <td><?php echo e($reservation->immobiliere->proprietaire->tele); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Email</th>
                                        <td><?php echo e($reservation->immobiliere->proprietaire->email); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Client</th>
                                        <td><?php echo e($reservation->profile->nom); ?> <?php echo e($reservation->profile->prenom); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">CIN</th>
                                        <td><?php echo e($reservation->profile->cin); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Telephone</th>
                                        <td><?php echo e($reservation->profile->tele); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Email</th>
                                        <td><?php echo e($reservation->email); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Nombre perssonnes</th>
                                        <td><?php echo e($reservation->nbPerssonnes); ?></td>
                                    
                                    </tr>
                                    <tr class="text-white">
                                        <th scope="row">Relation</th>
                                        <td><?php echo e($reservation->reservationsrolation->relation); ?></td>
                                    
                                    </tr>
                                  
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                  <?php if($reservation->etate=='valider'): ?>

                  <div class="col-sm-12 col-lg-6">
                      <div class="bg-secondary rounded h-100 p-4 mt-5 pt-5">
                        <div class="bg-primary mt-5 p-3 pt-0 rounded ">
                        <h4 class="mb-4 text-center mt-5 pt-5">la reservation est valider</h4>
                        <form action="<?php echo e(route('reservations.destroy',$reservation->id)); ?>" class="text-center" method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
                          

                          <button class="btn btn-danger" type="submit" onclick="return confirm('Supprimer?!!')">Supprimer</button>
                          </form>
                        </div>
                        

                      </div>
                  </div>
                  <?php else: ?>

                  <div class="col-sm-12 col-lg-6">
                      <div class="bg-secondary rounded h-100 p-4">
                        <h4 class="mb-4 text-center mt-5 pt-5">Modifications du reservation</h4>
                        <form action="<?php echo e(route('reservations.update',$reservation->id)); ?>" method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('PUT'); ?>
                          <table class="w-75 m-auto">
                              <tr>
                                <th>
                                  <label for="dateDebut">Date debut</label>
                                </th>
                                <td>
                                  <input type="date" name="dateDebut" id="dateDebut" class="ms-2 form-control" value="<?php echo e($reservation->dateDebut); ?>">
                                </td>  
                              </tr>
                              <tr>
                              <th>
                                  <label for="dateFin">Date fin</label>
                                </th>
                                <td>
                                  <input type="date" name="dateFin" id="dateFin" class="ms-2 form-control" value="<?php echo e($reservation->dateFin); ?>">
                                </td>
                              </tr>


                              <tr >
                              <td colspan="2">
                                  <input class="btn btn-danger m-4 mb-2" type="reset" value="Annule">
                                
                                  <input class="btn btn-success  m-4 mb-2" type="submit" value="Modifier">
                                </td>
                              </tr>
                          </table>
                        </form>

                        <hr>
                        <h4 class="text-center">Actions</h4>
                        <div class="d-lg-flex px-5 mx-5 justify-content-between">
                          <!-- <button class="btn btn-warning">Refuser</button> -->
                          <form action="<?php echo e(route('reservations.destroy',$reservation->id)); ?>" class="text-center" method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
                          

                          <button class="btn btn-warning" type="submit" onclick="return confirm('Rufeser?!!')">Refuser</button>
                          </form>

                          <form action="<?php echo e(route('reservations.update',$reservation->id)); ?>" method="post">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('PUT'); ?>
                          <input type="hidden" name="etate" value="valider">
                          

                          <button class="btn btn-success" type="submit">Valider</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
</div>

        </div>

    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\MY_OMAR_PROJET_FINAL\backend\resources\views/pages/reservations/show.blade.php ENDPATH**/ ?>