
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
       <h2 class="card-title">Article</h2>
    </div>
    <div class="card-body">
    <form action="<?php echo e(route('updatearticle',$article->id)); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" id="" value="<?php echo e(csrf_token()); ?>">
    Title: <input type="text" name="txtName" id="" class="form-control" value="<?php echo e($article->Title); ?>">
    Description: <textarea name="txtDescription" id="" class="form-control"><?php echo e($article->Description); ?></textarea>
    Image: <input type="file" name="image" id=""class="form-control">
    Caetgory: <select name="txtCategory" id="">
    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->CategoryName); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    Tag1: <select name="txtTag1" id="">
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($t->id); ?>"><?php echo e($t->TagName); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    Tag2: <select name="txtTag2" id="">
    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($t->id); ?>"><?php echo e($t->TagName); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <br>
    <input type="Submit" name="btnSubmit" id="" value="Submit" class="btn btn-primary float-end">
    </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blogspot\resources\views/editarticle.blade.php ENDPATH**/ ?>