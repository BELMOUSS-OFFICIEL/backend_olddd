
<?php $__env->startSection('res'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
<div class="bg-secondary text-center rounded p-4">

    <div class="d-md-flex justify-content-between pe-5">
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


    <div class="d-md-flex align-items-center justify-content-between mb-4 pe-4 mt-3">
        <h6></h6>
        <a href="<?php echo e(route('reservations.create')); ?>" class="text-primary">Ajouter reservation</a>
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
               
                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="<?php echo e(route('reservations.show',1)); ?>">Detail</a>
                        <a class=" " href="">edit</a>
                        <a class=" " href="">supprimer</a>
                        <a class=" " href="">valider</a>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2022-02-14</td>
                    <td>villa niti</td>
                    <td>Jhon Doe</td>
                    <td>0898909999</td>
                    <td>Abdelilah Tainit</td>
                    <td>8988499390</td>
                    <td>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                        <a class=" " href="">Detail</a>
                    </td>
                </tr>   
            </tbody>
        </table>
    </div>
</div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\backend\resources\views/pages/reservations/index.blade.php ENDPATH**/ ?>