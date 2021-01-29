

<?php $__env->startSection('content'); ?>


      <!-- Three columns of text below the carousel -->
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
      <hr class="featurette-divider">
      <div style="display: flex; justify-content: center;">
      <?php echo e($products->links()); ?> 
      </div> 
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/articles.blade.php ENDPATH**/ ?>