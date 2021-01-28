

<?php $__env->startSection('content'); ?>

<div class="container">
    <form class="form-signin" action="/inscription" method="post">
        <?php echo e(csrf_field()); ?>


        <h2 class="form-signin-heading">Inscription</h2>
        <br/>
        <p><input type="text" name="nom" placeholder="Nom"></p>

        <p><input type="text" name="prenom" placeholder="Prénom"></p>

        <p><input type="text" name="adresse" placeholder="Adresse"></p>

        <p><input type="date" name="date_naissance" placeholder="Date de naissance"></p>

        <p><input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>"></p>
        <?php if($errors->has('email')): ?>
            <p><?php echo e($errors->first('email')); ?></p>
        <?php endif; ?>

        <p><input type="password" name="password" placeholder="Mot de passe"></p> 
        <?php if($errors->has('password')): ?>
            <p><?php echo e($errors->first('password')); ?></p>
        <?php endif; ?>

        <p><input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)"></p>
        <?php if($errors->has('password_confirmation')): ?>
            <p><?php echo e($errors->first('password_confirmation')); ?></p>
        <?php endif; ?>

        <p><input class="btn btn-large btn-black " type="submit" value="M'inscrire"></p>

    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elodie Turam\Documents\GitHub\EcommerceWeb\resources\views/inscription.blade.php ENDPATH**/ ?>