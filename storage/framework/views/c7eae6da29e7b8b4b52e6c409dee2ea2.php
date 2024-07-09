<?php $__env->startSection('imm'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary  rounded p-4">

            <div class="row g-0 gx-5 align-items-end">

                <div class="text-start mx-auto  wow ">
                    <h3 class="mb-3">Les Proprietes</h3>

                </div>


            </div>
            <div class="tab-content px-5">


                <div class="row ">

                    <?php $__currentLoopData = $immobilieres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $immobiliere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-4 col-md-6  pt-1  " data-wow-delay="0.1s" style="border: 4px solid black">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a class="hova" href="<?php echo e(route('immobiliers.show', $immobiliere['id'])); ?>"><img
                                            class="img-fluid"
                                            src="<?php echo e(asset('storage/' . $immobiliere['medias'][0]->src . '')); ?>" alt=""
                                            style=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        <?php echo e($immobiliere['type']->type); ?></div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        <?php echo e($immobiliere['categorie']->categorie); ?></div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3"><?php echo e($immobiliere['prix']); ?>$</h5>
                                    <a class="d-block h5 mb-2 hova"><?php echo e($immobiliere['nom']); ?></a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo e($immobiliere['adresse']); ?>

                                    </p>
                                </div>
                                <div class="d-flex border-top">

                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i><?php echo e($immobiliere['nbrChamber']); ?>

                                        Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i><?php echo e($immobiliere['nprToilets']); ?>

                                        Bath</small>

                                </div>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                </div>



            </div>
<div class="border border-0 border-top mt-3 p-2">

    <?php echo e($immobilieres->links()); ?>

</div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\abdel_mgur99m\Desktop\gestion immobilier\projet\backend\resources\views/pages/immobiliers/index.blade.php ENDPATH**/ ?>