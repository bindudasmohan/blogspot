<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Blog Spot</title>
</head>
<body>
    <div class="container-fluid">
     <div class="row align-items-center bg-secondary text-light">
        <div class="col"><h1 class="text-light">BlogSpot Dashboard</h1></div>
        <div class="col-3">
        <form action="<?php echo e(url('logout')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php if(Session::get('UNAME')): ?>
        <?php echo e(Session::get('UNAME')); ?>

        <?php endif; ?>
        <button type="submit" class="btn btn-outline-warning"><i class="fa fa-power-off"></i></button>
        </form>
        </div>
     </div>
     <div class="row">
        <div class="col-2">
            <ul class="nav flex-column bg-light">
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/categorylist">Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="/taglist">Tags</a></li>
                <li class="nav-item"><a class="nav-link" href="/articlelist">Articles</a></li>
            </ul>
        </div>
        <div class="col">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
     </div>
    </div>
</body>
</html>
<?php /**PATH D:\laravel\blogspot\resources\views/layout/master.blade.php ENDPATH**/ ?>