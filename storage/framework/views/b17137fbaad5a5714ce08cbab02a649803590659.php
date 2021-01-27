


<?php $__env->startSection('content'); ?>


      <div class="featurette">
        <img style="height: 380px; " class="featurette-image pull-right" src="<?php echo e($product->image); ?>">
        <h2 class="featurette-heading"><?php echo e($product->titre); ?> </h2>
        <h2><?php echo e($product->prix); ?>€ </h2>
        <p style="overflow-wrap: break-word; " class="lead"><?php echo e($product->description); ?></p>
         <form action="" method="POST">
           <button type="submit" class="btn btn-dark">   
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/article.blade.php ENDPATH**/ ?>