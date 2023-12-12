
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="row">
<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-md-2 col-lg-3">
    <div class="card">
        <img src="../upload/<?php echo e($art->Image); ?>" alt="" srcset="" class="img-top">
        <div class="card-body"><h5><?php echo e($art->Title); ?></h5>
            <p class="card-text">    <?php echo e($art->Description); ?></p>
            <p>Category:<?php echo e($art->CategoryName); ?></p>
            <p><?php echo e($art->TagName); ?>,<?php echo e($art->TagName); ?></p>
        </div>
  

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blogspot\resources\views/home.blade.php ENDPATH**/ ?>