
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header">
       <h2 class="card-title">New Category</h2>
    </div>
    <div class="card-body">
    <form action="<?php echo e(route('storecategory')); ?>" method="POST">
    <input type="hidden" name="_token" id="" value="<?php echo e(csrf_token()); ?>">
    Category Name: <input type="text" name="txtName" id="" class="form-control">
    Remarks: <textarea name="txtRemarks" id="" class="form-control"></textarea>
    <br>
    <input type="Submit" name="btnSubmit" id="" value="Submit" class="btn btn-primary float-end">
    </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blogspot\resources\views/newcategory.blade.php ENDPATH**/ ?>