

<?php $__env->startSection('content'); ?>
    

    <div class="carousel-inner">
        <h1>Mon compte</h1>

        <p>Vous êtes bien connecté.</p>

        <a href="/deconnexion" class="button">Déconnexion</a>
    </div>
    <div><li></li></div>
    <div>
    <section class="contact-form">
        <form class="form-group" action="/inscription" method="post">
        <?php echo e(csrf_field()); ?>


        <p><input type="text" name="pseudo" placeholder="Nouveau pseudo"></p>

        <p><input type="email" name="email" placeholder="Nouvelle email"></p>
        <?php if($errors->has('email')): ?>
            <p><?php echo e($errors->first('email')); ?></p>
        <?php endif; ?>

        <p><input type="password" name="password" placeholder="Nouveau mot de passe"></p> 
        <?php if($errors->has('password')): ?>
            <p><?php echo e($errors->first('password')); ?></p>
        <?php endif; ?>

        <p><input type="password" name="password_confirmation" placeholder="Nouveau mot de passe (confirmation)"></p>
        <?php if($errors->has('password_confirmation')): ?>
            <p><?php echo e($errors->first('password_confirmation')); ?></p>
        <?php endif; ?>

        <p><input type="submit" value="Modifier mon mot de passe"></p>
        </form>
    </section>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elodie Turam\Documents\GitHub\EcommerceWeb\resources\views/mon-compte.blade.php ENDPATH**/ ?>