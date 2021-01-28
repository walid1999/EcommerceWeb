

<?php $__env->startSection('content'); ?>

<<div class="col-md-12">
    <h1>Mon panier</h1>
</div>
<?php if(Cart::count() > 0): ?>
<div class="px-4 px-lg-0">
    <div class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
                    <!-- Shopping cart table -->
                    <div class="table-responsive">
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="border-0 bg-light">
                                <div class="p-2 px-3 text-uppercase">Produit</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Prix</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Quantité</div>
                            </th>
                            <th scope="col" class="border-0 bg-light">
                                <div class="py-2 text-uppercase">Supprimer</div>
                            </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row" class="border-0">
                                    <div class="p-2">
                                    
                                    <img src="<?php echo e($product->model->image); ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                                    
                                        
                                        <div class="ml-3 d-inline-block align-middle">
                                            <h5 class="mb-0"> <a href="<?php echo e(route('article', ['id' => $product->model->id])); ?>" class="text-dark d-inline-block align-middle"><?php echo e($product->model->title); ?></a></h5>
                                        </div>
                                    </div>
                                </th>
                                <td class="border-0 align-middle"><strong><?php echo e($product->model->price); ?> €</strong></td>
                                <td class="border-0 align-middle"><strong>1</strong></td>
                                <td class="border-0 align-middle">
                                    <form action="<?php echo e(route('cart.destroy', $product->rowId)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        </table>
                    </div>
                    <!-- End -->
                </div>
            </div>
            
<?php else: ?>
    <div class="col-md-12">
        <p>Votre panier est vide.</p>
    </div>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Elodie Turam\Documents\GitHub\EcommerceWeb\resources\views/monpanier.blade.php ENDPATH**/ ?>