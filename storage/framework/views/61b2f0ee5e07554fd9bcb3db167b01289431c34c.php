
<?php $__env->startSection('content'); ?>
 <div class="panel panel-default">
 <div class="panel-heading">Add New Product</div>
 <div class="panel-body">
<?php if(count($errors) > 0): ?>
 <div class="alert alert-danger">
 <strong>Errors:</strong>
 <ul>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <li><?php echo e($error); ?></li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
</div>
<?php endif; ?>
 <?php echo e(Form::open(array('route' => 'products.store','method'=>'POST'))); ?>

<div class="form-group">
<label for="name">Name</label>
<input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
</div>

<div class="form-group">
<label for="description">Description</label>
<textarea name="description" class="form-control" rows="3"><?php echo e(old('description')); ?></textarea>
</div>

<div class="form-group">
<label for="photo">Photo</label>
<input type="text" name="photo" class="form-control" value="<?php echo e(old('photo')); ?>">
</div>

<div class="form-group">
<label for="price">Price</label>
<input type="text" name="price" class="form-control" value="<?php echo e(old('price')); ?>">
</div>

<div class="form-group">
<input type="submit" value="Add Product" class="btn btn-info">
<a href="<?php echo e(route('products.index')); ?>" class="btn btndefault">Cancel</a>
</div>
 <?php echo e(Form::close()); ?>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\intel\proiect\resources\views/products/create.blade.php ENDPATH**/ ?>