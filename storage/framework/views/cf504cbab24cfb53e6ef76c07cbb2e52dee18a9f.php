
<?php $__env->startSection('title', 'Products'); ?>
<?php $__env->startSection('content'); ?>
 <div class="container products">
 <div class="row">
 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-xs-18 col-sm-6 col-md-3">
 <div class="thumbnail">
 <img src="<?php echo e($product->photo); ?>" width="250" height="250">
 <div class="caption">
 <h4><?php echo e($product->name); ?></h4>
 <p><?php echo e(str_limit(strtolower($product->description), 50)); ?></p>
 <p><strong>Pret: </strong> <?php echo e($product->price); ?> RON</p>
 <p class="btn-holder"><a href="<?php echo e(url('add-to-cart/'.$product->id)); ?>"
class="btn btn-warning btn-block text-center" role="button">Pune in cos</a> </p>
 </div>
 </div>
 </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div><!-- End row -->
 </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layoutcos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\intel\proiect\resources\views/products.blade.php ENDPATH**/ ?>