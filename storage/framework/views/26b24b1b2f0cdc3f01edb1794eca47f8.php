

<?php $__env->startSection('dash'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Today Sale</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-bar fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Sale</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-area fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Today Revenue</p>
                    <h6 class="mb-0">$1234</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Revenue</p>
                    <h6 class="mb-0">$1234</h6>
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

    <div class="bg-secondary text-center rounded p-4 mt-3">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Nouvelles réservations d'achat</h6>
            <a href="<?php echo e(ROUTE('achates.index')); ?>" class="text-primary">Voir plus</a>
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
                           
                        </td>
                    </tr>   
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\backend\resources\views/index.blade.php ENDPATH**/ ?>