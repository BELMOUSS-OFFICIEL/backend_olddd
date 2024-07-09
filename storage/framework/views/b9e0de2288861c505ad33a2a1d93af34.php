

<?php $__env->startSection('imm'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">
        <h4 class="mb-3">Ajouter une nouvelle immobilier</h4>
        <form action="" method="post">

            <div class=" rounded h-100 p-2 border border-3 ">
                <h5 class="my-2 ps-1">les donnees de l'immobilie</h5>
                <div class="d-flex gap-3 justify-content-between  ">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                        placeholder="villa/appartement/...." name="nom">
                        <label for="floatingInput">Nom Immobilie</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="villa/appartement/...." name="adresse">
                        <label for="floatingInput">Adresse de l'immobilier</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="villa/appartement/...." name="prix">
                        <label for="floatingInput">prix de l'immobilier</label>
                    </div>
           
           
                </div>
                <div class="d-flex gap-3">

                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <option selected>Categoris </option>
                        <option value="1">Villa</option>
                        <option value="2">Appartement</option>
                        <option value="3">Terre</option>
                        <option value="4">Garage</option>
                    </select>

                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <option selected>Type </option>
                        <option value="1">Location</option>
                        <option value="2">Vente</option>
                        
                    </select>
           
                 </div>
           
                <div class="form-floating">
                    <textarea class="form-control" placeholder="descripton ..."
                        id="floatingTextarea" style="height: 150px;"></textarea>
                    <label for="floatingTextarea">Description </label>
                </div>
           
                <div class="d-flex justify-content-between mt-3">
           
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="1/2/....">
                        <label for="floatingInput">Nomber chambers</label>
                    </div>
               
                    <div class="mb-3">
                        <input class="form-control bg-dark" type="file" id="formFileMultiple" multiple>
                        <label for="formFileMultiple" class="form-label">Choisir les images</label>
                    </div>
           
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="1/2/....">
                        <label for="floatingInput">Nomber Toilets</label>
                    </div>
                </div>
                <div style="border-top: 2px solid black"></div>
                <h4 class="my-2 ps-1">les donnees de l'immobilier</h4>
            
                <div class="d-flex gap-3 justify-content-between  ">
           
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="villa/appartement/...." name="cin">
                        <label for="floatingInput">CIN de l'immobilier</label>
                    </div>
           
                  
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="villa/appartement/...." name="nom">
                        <label for="floatingInput">Nom Immobilier</label>
                    </div>
           
           
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="villa/appartement/...." name="prenom">
                        <label for="floatingInput">Prenom immobilier</label>
                    </div>
              
                </div>    
                <div class="d-flex gap-3 justify-content-between  ">
           
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="villa/appartement/...." name="cin">
                        <label for="floatingInput">Telephone de l'immobilier</label>
                    </div>
           
           
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput"
                            placeholder="villa/appartement/...." name="nom">
                        <label for="floatingInput">E-mail Immobilier</label>
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
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\backend\resources\views/pages/immobiliers/create.blade.php ENDPATH**/ ?>