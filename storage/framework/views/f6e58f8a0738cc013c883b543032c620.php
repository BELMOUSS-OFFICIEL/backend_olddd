<?php $__env->startSection('imm'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4">

          <?php if(session()->has('success')): ?>
<div class="alert alert-success  alert-dismissible fade show" role="alert">
                              <i class="fa fa-exclamation-circle me-2"></i><?php echo e(session('success')); ?>

                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
            <h5 class="p-3 mb-2">Detailes d'immobilier : <span class="text-primary"><?php echo e($immobiliere['nom']); ?></span></h5>
            <div>
                <div class="bd-example-snippet bd-code-snippet">
                    <div class="bd-example m-0 border-0">
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <?php $__currentLoopData = $immobiliere['medias']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="<?php echo e($medias['id']); ?>" class="active" aria-current="true"
                                        aria-label="Slide <?php echo e($medias['id']); ?>"></button>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo e(asset('storage/' . $immobiliere['medias'][0]['src'] . '')); ?>"
                                        class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800"
                                        height="400" alt="">
                                </div>
                                <?php $__currentLoopData = $immobiliere['medias']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medias): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="carousel-item ">
                                        <img src="<?php echo e(asset('storage/' . $medias['src'] . '')); ?>"
                                            class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800"
                                            height="400" alt="">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>








            <div class="gap-3 d-md-flex mt-5">
                <form action="<?php echo e(route('immobiliers.update', $immobiliere['id'])); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">

                            <tr class="text-white">

                                <th scope="col">Nom</th>
                                <td scope="row"><input class="myform-control" type="text" name="nom"
                                        id="nom" value="<?php echo e($immobiliere['nom']); ?>"></td>

                            </tr>
                            <tr class="text-white">
                                <th scope="col">description</th>
                                <td scope="row">
                                    <textarea class="myform-control" name="description" id="description" cols="100" rows="3"><?php echo e($immobiliere['description']); ?> </textarea>
                                </td>
                            </tr>
                            <tr class="text-white">
                                <th scope="col">Adress</th>
                                <td scope="row"><input class="myform-control" type="text" name="adresse"
                                        id="adresse" value="<?php echo e($immobiliere['adresse']); ?>"> </td>
                            </tr>
                            <tr class="text-white">
                                <th scope="col">Sector</th>
                                <td scope="row"><input class="myform-control" type="text" name="sector"
                                        id="sector" value="<?php echo e($immobiliere['sector']); ?>"> </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">type</th>
                                <td scope="row"><select class="myform-control" type="text" name="type_id"
                                        id="type_id">
                                        <option value="<?php echo e($immobiliere['type_id']); ?>"><?php echo e($immobiliere['type']->type); ?>

                                        </option>

                                        <option value="1">Achat</option>
                                        <option value="2">Location</option>

                                    </select> </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">Categorie</th>
                                <td scope="row"><?php echo e($immobiliere['categorie']->categorie); ?> </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">prix par mois</th>
                                <td scope="row"><input class="myform-control" type="text" name="prix"
                                        id="prix" value="<?php echo e($immobiliere['prix']); ?>"> </td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">prix par jour</th>
                                <td scope="row"><input class="myform-control" type="text" name="prixParJour"
                                        id="prixParJour" value="<?php echo e($immobiliere['prixParJour']); ?>"></td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">propritaire</th>
                                <td scope="row"><?php echo e($immobiliere['proprietaire']->nom); ?>

                                    <?php echo e($immobiliere['proprietaire']->prenom); ?></td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">Telephon</th>
                                <td scope="row"><?php echo e($immobiliere['proprietaire']->tele); ?></td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">email</th>
                                <td scope="row"><?php echo e($immobiliere['proprietaire']->email); ?></td>
                            </tr>







                            <tr class="text-white">
                                <th scope="col">nombre chombers</th>
                                <td scope="row"><input class="myform-control" type="text" name="nbrChamber"
                                        id="nbrChamber" value="<?php echo e($immobiliere['nbrChamber']); ?>"></td>
                            </tr>

                            <tr class="text-white">
                                <th scope="col">nomber toiletes</th>
                                <td scope="row"><input class="myform-control" type="text" name="nprToilets"
                                        id="nprToilets" value="<?php echo e($immobiliere['nprToilets']); ?>"></td>
                            </tr>





                        </table>

                    </div>
                    <div class="d-flex gap-5 mt-4">
                        <input class="btn btn-primary " type="submit" value="Modifier">






                </form>
                <form action="<?php echo e(route('immobiliers.destroy', $immobiliere['id'])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <input type="submit" class="btn btn-danger" onclick="return confirm('Supprimer?!!')" value="Supprimer">
                </form>
                <a class="btn btn-outline-danger" href="<?php echo e(route('immobiliers.index')); ?>">Retour</a>

            </div>

            </div>

        </div>



    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Desktop\backend\resources\views/pages/immobiliers/show.blade.php ENDPATH**/ ?>