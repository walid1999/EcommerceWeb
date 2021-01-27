<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
        <script src="../js/app.js" defer></script>
        <script src="https://kit.fontawesome.com/45109b19e5.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>

</html>

<?php /**PATH C:\xampp\htdocs\Laravel\ProjetWeb\resources\views/base.blade.php ENDPATH**/ ?>