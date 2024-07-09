

<?php $__env->startSection('imm'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4">

        <h5 class="p-3 mb-2"  >Detailes d'immobilier : <span class="text-primary">Villa niti</span></h5>
        <div>
            <div class="bd-example-snippet bd-code-snippet"><div class="bd-example m-0 border-0">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo e(asset('img/property-2.jpg')); ?>" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  alt="">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo e(asset('img/property-3.jpg')); ?>" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  alt="">
                </div>
                <div class="carousel-item">
                   <img src="<?php echo e(asset('img/property-1.jpg')); ?>" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400"  alt="">
                  
                </div>
              </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
                </div>
                </div>
    
          </div>

    
    
    
       
          


          <div class="gap-3 d-md-flex mt-5">
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                
                        <tr class="text-white">
                        
                            <th scope="col">Nom</th>
                            <td scope="row">Villa niti</td>
                        
                        </tr>
                        <tr class="text-white">
                            <th scope="col">description</th>
                            <td scope="row"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum vitae voluptates saepe fuga atque minima, in totam. Ullam, fugit possimus?</td>
                        </tr>
                        <tr class="text-white">
                            <th scope="col">Adress</th>
                            <td scope="row">issil nwazma</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">type</th>
                            <td scope="row">Location</td>
                        </tr>
                        
                        <tr class="text-white">
                            <th scope="col">prix par mois</th>
                            <td scope="row">2000 dh</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">prix par jour</th>
                            <td scope="row">200 dh</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">propritaire</th>
                            <td scope="row">abdoo niti</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">Telephon</th>
                            <td scope="row">2022980223</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">email</th>
                            <td scope="row"></td>
                        </tr>

                        

                        

                        

                        <tr class="text-white">
                            <th scope="col">nombre chombers</th>
                            <td scope="row">4</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">nomber toiletes</th>
                            <td scope="row">1</td>
                        </tr>

                        

                
                
                </table>
            </div>


            

    </div>
    <div class="d-flex gap-5 mt-4">
        <form action="">
            <input type="submit" value="Supprimer">
        </form>
        <a href="">Modifier</a>
        <a href="">Reserver</a>
        <a href="<?php echo e(route('immobiliers.index')); ?>">Retour</a>
    </div>
    </div>


    
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\backend\resources\views/pages/immobiliers/show.blade.php ENDPATH**/ ?>