
<?php $__env->startSection('res'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary  rounded p-4 ">

<h4>
    Details de reservation de <span class="text-primary">Abdelilah Tainit</span>
</h4>
    <div class="gap-3 d-md-flex">
            <div class="table-responsive col-md-6">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                
                        <tr class="text-white">
                        
                            <th scope="col">Date debut</th>
                            <td scope="row">2022-02-13</td>
                        
                        </tr>
                        <tr class="text-white">
                            <th scope="col">Date fin</th>
                            <td scope="row">2022-02-23</td>
                        </tr>

                        

                        <tr class="text-white">
                            <th scope="col">preprieter</th>
                            <td scope="row">Villa niti</td>
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
                            <th scope="col">client</th>
                            <td scope="row">Abdelilah Tainit</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">Telephon</th>
                            <td scope="row">20226347823</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">email</th>
                            <td scope="row">abdelilah@gmail.com</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">nombre perssonnes</th>
                            <td scope="row">4</td>
                        </tr>

                        <tr class="text-white">
                            <th scope="col">relation</th>
                            <td scope="row">famille</td>
                        </tr>


                
                
                </table>
            </div>


            <div class="mt-5">
                <h5>Modifier la date de reservation</h5>
                <form action="" method="post" class="d-flex gap-3">
<input type="date" class="form-control" value="2022-02-13">
<input type="date" class="form-control" value="2022-02-13">

<input type="submit" value="Modifier" class="btn btn-primary">


                </form>
                

               
                <div class="mt-5 ">
                    <h5>controler la reservation</h5>
                    <div class="d-flex justify-content-between">

                   
                   <div class="d-flex gap-4">
                    <button class="btn btn-success">Valider</button>
                    <button class="btn btn-danger">Refuser</button>
                   </div>
                    <a href="<?php echo e(route('reservations.index')); ?>" class="text-warning">Retour</a>
                    </div>
                </div>
            </div>

    </div>
        
    </div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\backend\resources\views/pages/reservations/show.blade.php ENDPATH**/ ?>