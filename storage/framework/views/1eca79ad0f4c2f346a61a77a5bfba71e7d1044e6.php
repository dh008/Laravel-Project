<?php $__env->startSection('content'); ?>
<div class="container">
 <div class="row">
 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-default">
 <div class="panel-heading">Dashboard</div>
 <div class="panel-body">
 <?php if(session('status')): ?>
 <div class="alert alert-success">
 <?php echo e(session('status')); ?>

 </div>
 <?php endif; ?>
 <div> <a href="<?php echo e(URL::to('tasks')); ?>"> Afisare toate sarcinile</a> </div>
 </div>
 </div>
 </div>
 </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\intel\proiect\resources\views/home.blade.php ENDPATH**/ ?>