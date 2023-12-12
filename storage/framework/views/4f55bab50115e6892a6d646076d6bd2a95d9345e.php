<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Blog Spot</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-3">

<div class="card">
<div class="card-header bg-primary"><h1 class="text-white">Registration</h1></div>
<div class="card-body">
<form action="<?php echo e(route('storeaccount')); ?>" method="POST">
<?php echo e(csrf_field()); ?>

UserName: <input type="text" name="Username" value="" class="form-control" required><br>
Password: <input type="password" name="Password" value="" class="form-control" required><br>
Confirm Password: <input type="password" name="CPassword" value="" class="form-control" required><br>
<p class="text-danger"><?php echo e($err); ?></p>
<br>
<input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">
</form>
</div>
</div>

</div>
</div>
</div>

</body>
</html><?php /**PATH D:\laravel\blogspot\resources\views/userreg.blade.php ENDPATH**/ ?>