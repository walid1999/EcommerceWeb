

<?php $__env->startSection('content'); ?>



<div class="container">

    <form class="form-signin" action="/connexion" method="post">
        <?php echo e(csrf_field()); ?>

        <h2 class="form-signin-heading">Connexion</h2>
        <br/>
        <p><input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>"></p>
        <?php if($errors->has('email')): ?>
            <p><?php echo e($errors->first('email')); ?></p>
        <?php endif; ?>

        <p><input type="password" name="password" placeholder="Mot de passe"></p>
        <?php if($errors->has('password')): ?>
            <p><?php echo e($errors->first('password')); ?></p>
        <?php endif; ?>

        <p><input class="btn btn-large btn-black " type="submit" value="Se connecter"></p>

    </form>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/connexion.blade.php ENDPATH**/ ?>