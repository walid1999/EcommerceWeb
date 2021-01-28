


<?php $__env->startSection('content'); ?>


      <div class="featurette">
        <img style="height: 380px; " class="featurette-image pull-right" src="<?php echo e($product->image); ?>">
        <h2 class="featurette-heading"><?php echo e($product->title); ?></h2>
        <h2><?php echo e($product->price); ?> € </h2>
        <p style="overflow-wrap: break-word; " class="lead"><?php echo e($product->description); ?></p>
         <form action="<?php echo e(route('store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
           <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
          
        
           <button type="submit" class="btn btn-dark">Ajouter au panier</button>   
        </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/article.blade.php ENDPATH**/ ?>