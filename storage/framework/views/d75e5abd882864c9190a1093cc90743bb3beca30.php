
<?php $__env->startSection('content'); ?>
<h1 class="text-primary text-center">Category List</h1>
<br>
<a href="<?php echo e(route('newcategory')); ?>"><h6>Add new Category</h6></a><br>
    <table class="table table-stripped table-primary">
        <tr>
            <th>Name & Remarks</th><th></th><th></th>
        </tr>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><h5><?php echo e($cate->CategoryName); ?></h5>
                <?php echo e($cate->Remarks); ?>

            </td>
            <td><a href="<?php echo e(route('editcategory',$cate->id)); ?>"><i class="fa fa-edit"></i></a></td>
            <td>
            <form action="<?php echo e(route('destroycategory',$cate->id)); ?>" method="POST" id="f1">
            <input type="hidden" name="_token" id="" value="<?php echo e(csrf_token()); ?>">
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blogspot\resources\views/categorylist.blade.php ENDPATH**/ ?>