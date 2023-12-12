
<?php $__env->startSection('content'); ?>
<h1 class="text-primary text-center">Tags</h1>
<br>
<a href="<?php echo e(route('newtag')); ?>"><h6>Add new Tag</h6></a><br>
    <table class="table table-stripped table-primary">
        <tr>
            <th>Name & Remarks</th><th></th><th></th>
        </tr>
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><h5><?php echo e($t->TagName); ?></h5>
                <?php echo e($t->Remarks); ?>

            </td>
            <td><a href="<?php echo e(route('edittag',$t->id)); ?>"><i class="fa fa-edit"></i></a></td>
            <td>
            <form action="<?php echo e(route('destroytag',$t->id)); ?>" method="POST" id="f1">
            <input type="hidden" name="_token" id="" value="<?php echo e(csrf_token()); ?>">
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash"></i></button>
            </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blogspot\resources\views/taglist.blade.php ENDPATH**/ ?>