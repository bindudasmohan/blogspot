
<?php $__env->startSection('content'); ?>
<h1 class="text-primary text-center">Articles</h1>
<br>
<a href="<?php echo e(route('newarticle')); ?>"><h6>Add new Article</h6></a><br>
    <table class="table table-stripped table-primary">
        <tr>
            <th>Title & Description</th><th>Image</th><th>Category</th><th>Tags</th><th></th><th></th>
        </tr>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><h5><?php echo e($art->Title); ?></h5>
                <?php echo e($art->Description); ?>

            </td>
            <td><img src="../upload/<?php echo e($art->Image); ?>" alt="" width="100" height="100"></img></td>
            <td><?php echo e($art->CategoryName); ?></td>
            <td><?php echo e($art->TagName); ?>,<?php echo e($art->TagName); ?></td>
            <td><a href="<?php echo e(route('editarticle',$art->id)); ?>"><i class="fa fa-edit"></i></a>
            <td>
            <form action="<?php echo e(route('destroyarticle',$art->id)); ?>" method="POST" id="f1">
            <input type="hidden" name="_token" id="" value="<?php echo e(csrf_token()); ?>">
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blogspot\resources\views/articlelist.blade.php ENDPATH**/ ?>