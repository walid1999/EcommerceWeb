

<?php $__env->startSection('content'); ?>

    <?php if(request()->input('search')): ?>
    <h2><?php echo e($products->total()); ?> résultat(s) pour la recherche "<?php echo e(request()->search); ?>"</h2>
    <br/>
    <?php endif; ?>
     
      <div class="row">
       <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" src="<?php echo e($product->image); ?>">
          <h2><?php echo e($product->title); ?> </h2>
          <h3> <?php echo e($product->price); ?> € </h3>
          <p><a class="btn" href="<?php echo e(route('article', $product->id)); ?>">Voir Produit </a></p>
        </div><!-- /.span4 -->
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     

      </div><!-- /.row -->
    
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/recherche.blade.php ENDPATH**/ ?>