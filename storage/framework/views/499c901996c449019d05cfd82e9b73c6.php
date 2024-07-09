<?php $__env->startSection('ajo'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4">
            <h4 class="mb-3">Ajouter une nouvelle immobilier</h4>
            <form action="<?php echo e(route('immobiliers.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>


                <div class=" rounded h-100 p-2 border border-3 ">
                    <h5 class="my-2 ps-1">les donnees de l'immobilie</h5>
                    <div class="d-flex gap-3 justify-content-between  ">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="nom" value="<?php echo e(old('nom')); ?>">
                            <label for="floatingInput">Nom Immobilie</label>
                            <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p><i class="text-danger"><?php echo e($message); ?></i></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="adresse" value="<?php echo e(old('adresse')); ?>">
                            <label for="floatingInput">Adresse de l'immobilier</label>
                            <?php $__errorArgs = ['adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p><i class="text-danger"><?php echo e($message); ?></i></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="prix" value="<?php echo e(old('prix')); ?>" >
                            <label for="floatingInput">prix de l'immobilier</label>
                            <?php $__errorArgs = ['prix'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p><i class="text-danger"><?php echo e($message); ?></i></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="prixParJour" value="<?php echo e(old('prixParJour')); ?>">
                            <label for="floatingInput">prix par jour</label>
                        </div>


                    </div>
                    <div class="d-flex gap-3">

                        <div class="w-50 mb-3">
                            <select class="form-select form-select-sm " name="categorie_id"
                            aria-label=".form-select-sm example" >
                            <option selected >Categoris </option>
                            <option value="1">Villa</option>
                            <option value="2">Appartement</option>
                            <option value="3">Terre</option>
                            <option value="4">Garage</option>
                        </select>
                        <?php $__errorArgs = ['categorie_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="w-50 mb-3">
                            <select class="form-select form-select-sm " aria-label=".form-select-sm example" name="type_id">
                                <option selected>Type </option>
                                <option value="1">Location</option>
                                <option value="2">Vente</option>

                            </select>
                            <?php $__errorArgs = ['type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    </div>

                    <div class="form-floating">
                        <textarea name="description" class="form-control" placeholder="descripton ..." id="floatingTextarea"
                            style="height: 150px;" value="<?php echo e(old('description')); ?>"></textarea>
                        <label for="floatingTextarea">Description </label>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="d-flex justify-content-between mt-3">

                        <div class="form-floating mb-3">
                            <input name="nbrChamber" type="text" class="form-control" id="floatingInput"
                                placeholder="1/2/...." value="<?php echo e(old('nbrChamber')); ?>">
                            <label for="floatingInput">Nomber chambers</label>
                        </div>

                        <div class="mb-3">
                            <input class="form-control bg-dark" type="file" id="formFileMultiple" name="images[]"
                                multiple />
                            <label for="formFileMultiple" class="form-label" value="<?php echo e(old('images')); ?>">Choisir les images</label>
                            <?php $__errorArgs = ['images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-floating mb-3">
                            <input name="nprToilets" type="text" class="form-control" id="floatingInput"
                                placeholder="1/2/...." value="<?php echo e(old('nprToilets')); ?>">
                            <label for="floatingInput">Nomber Toilets</label>
                        </div>
                    </div>
                    <div style="border-top: 2px solid black"></div>
                    <h4 class="my-2 ps-1">les donnees de l'immobilier</h4>

                    <div class="d-flex gap-3 justify-content-between  ">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="cin" value="<?php echo e(old('cin')); ?>">
                            <label for="floatingInput">CIN de l'immobilier</label>
                            <?php $__errorArgs = ['cin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="nomp" value="<?php echo e(old('nomp')); ?>">
                            <label for="floatingInput">Nom Immobilier</label>
                            <?php $__errorArgs = ['nomp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="prenom" value="<?php echo e(old('prenom')); ?>">
                            <label for="floatingInput">Prenom immobilier</label>
                            <?php $__errorArgs = ['prenom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                    </div>
                    <div class="d-flex gap-3 justify-content-between  ">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="tele" value="<?php echo e(old('tele')); ?>">
                            <label for="floatingInput">Telephone de l'immobilier</label>
                            <?php $__errorArgs = ['tele'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="villa/appartement/...." name="email" value="<?php echo e(old('email')); ?>">
                            <label for="floatingInput">E-mail Immobilier</label>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p>
                                <i class="text-danger"><?php echo e($message); ?></i>
                            </p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div style="border-top: 2px solid black"></div>
                    <div class="mt-3 py-4 d-flex justify-content-between">
                        <a href="<?php echo e(route('immobiliers.index')); ?>" class="btn btn-danger">Retour</a>

                        <input type="submit" class="btn btn-primary" value="Ajouter">

                    </div>
                </div>

        </div>

    </div>

    </form>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\projet\backend\resources\views/pages/immobiliers/create.blade.php ENDPATH**/ ?>