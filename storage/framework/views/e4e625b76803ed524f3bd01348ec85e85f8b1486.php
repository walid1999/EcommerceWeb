

<?php $__env->startSection('content'); ?>
    

    <div style="text-align: center" >
        <h1>Mon compte</h1>

        <p>Vous êtes bien connecté.</p>

        <br/>
    </div>

    <div class="container">
    
    
    <section class="contact-form">
        <form class="form-signin" action="/inscription" method="post">
        <?php echo e(csrf_field()); ?>


        <h2 class="form-signin-heading">Modifier mon compte</h2>

        <br/>

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

        <p><input class="btn btn-large btn-black " type="submit" value="Modifier"></p>
        </form>
    </section>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/mon-compte.blade.php ENDPATH**/ ?>