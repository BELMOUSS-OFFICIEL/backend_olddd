
<?php $__env->startSection('com'); ?>
active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid pt-4 px-4">
  <?php if(session()->has('success')): ?>
  <div class="alert alert-success w-75 m-auto alert-dismissible fade show" role="alert">
                                  <i class="fa fa-exclamation-circle me-2"></i><?php echo e(session('success')); ?>

                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif; ?>
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-8 m-auto mt-2">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                
                            </div>
                            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex align-items-center border-bottom py-3">
                              
                              <div class="w-100 ms-3">
                                  <div class="d-flex w-100 justify-content-between">
                                      <h6 class="mb-0"><?php echo e($item->name); ?></h6>
                                      <small><?php echo e($item->email); ?></small>
                                  </div>
                                  <span><?php echo e($item->mesage); ?></span>
                                  <br>
                                  <span class="text-primary"><?php echo e($item->dateMessage); ?></span>
                              <div class="text-end d-flex justify-content-end">
                                <?php if($item->etate!=='valider'): ?>
                                <form action="<?php echo e(route('reviews.update',$item->id)); ?>" method="post">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('PUT'); ?>
                    
                                  <input class="text-success bg-secondary border-0" type="submit" value="Valider">
                                  </form>
                                <?php endif; ?>
                              

                                <form action="<?php echo e(route('reviews.destroy',$item->id)); ?>" method="post">
                                  <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                    
                                  <input class="text-danger bg-secondary border-0" type="submit" value="Supprimer">
                                  </form>
                              </div>
                              </div>
                            

                          </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                        </div>
                    </div>
                  
                  
                </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PC\Desktop\backend\resources\views/pages/reviews/index.blade.php ENDPATH**/ ?>