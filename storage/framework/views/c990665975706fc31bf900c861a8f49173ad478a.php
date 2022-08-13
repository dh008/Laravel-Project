
<?php $__env->startSection('content'); ?>
 <div class="panel panel-default">
 <div class="panel-heading">
 View Product
 </div>
 <div class="panel-body">
 
 <div class="pull-right">
 <a class="btn btn-default" href="<?php echo e(route('products.index')); ?>">Back</a>
 </div>
 
 <div class="form-group">
 <strong>Name: </strong> <?php echo e($product->name); ?>

 </div>
 
 <div class="form-group">
 <strong>Description: </strong> <?php echo e($product->description); ?>

 </div>
 
 <div class="form-group">
 <strong>Photo: </strong> <?php echo e($product->photo); ?>

 </div>
 
 <div class="form-group">
 <strong>Price: </strong> <?php echo e($product->price); ?>

 </div>
 
 </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\intel\proiect\resources\views/products/show.blade.php ENDPATH**/ ?>