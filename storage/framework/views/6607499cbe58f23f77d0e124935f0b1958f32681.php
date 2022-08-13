
<?php $__env->startSection('content'); ?>
 <?php if($message = Session::get('success')): ?>
 <div class="alert alert-success">
 <p><?php echo e($message); ?></p>
 </div>
 <?php endif; ?>
 <div class="panel panel-default">
 <div class="panel-heading">
 Lista sarcinilor
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-right">
 <a href="/products/create" class="btn btn-default">Add New Product</a>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
 <th width="20">No</th>
 <th>Title</th>
 <th>Description</th>
 <th>Photo</th>
 <th>Price</th>
 <th width="300">Action</th>
 </tr>
 <?php if(count($products) > 0): ?>
 <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td><?php echo e(++$i); ?></td>
 <td><?php echo e($product->name); ?></td>
 <td><?php echo e($product->description); ?></td>
 <td>
 <a class="btn btn-success" href="<?php echo e(route('products.show',$product->id)); ?>">Show</a>
 <a class="btn btn-primary" href="<?php echo e(route('products.edit',$product->id)); ?>">Edit</a>
 <?php echo e(Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline'])); ?>

 <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

 <?php echo e(Form::close()); ?>

 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php else: ?>
 <tr>
 <td colspan="4">There are no products!</td>
 </tr>
 <?php endif; ?>
 </table>
<!-- Introduce nr pagina -->
<?php echo e($products->render()); ?>

 </div>
 </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\intel\proiect\resources\views/products/list.blade.php ENDPATH**/ ?>