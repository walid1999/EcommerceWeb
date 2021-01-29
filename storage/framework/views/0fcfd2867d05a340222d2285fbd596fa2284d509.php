<div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">W/E</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="<?php echo e(route('home')); ?>">Accueil</a></li>
                <li><a href="<?php echo e(route('articles')); ?>">Articles</a></li>

                <?php if(auth()->check()): ?>

                    <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">Espace client<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo e(route('mon-compte')); ?>">Mon compte</a></li>
                   
                    
                    <li><a href="<?php echo e(route('deconnexion')); ?>">Se deconnecter</a></li>
                   
                    </li>
                <?php else: ?>

				          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Espace client <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo e(route('inscription')); ?>">S'incrire</a></li>
                    <li><a href="<?php echo e(route('connexion')); ?>">Se connecter</a></li>
                    </li>
                <?php endif; ?>
				  </ul>
				
                <li><a href="sav">Service Client</a></li>
                <li><a href="about">A propos</a></li>
                <li>
                <form action="<?php echo e(route('recherche')); ?>" style="display: flex; margin: 3px;";>
                    <div class="form-group " style="margin-top: 10px; height: 20px;">
                      <input type="text" name="search" class="form-control" value="<?php echo e(request()->search ?? ''); ?>">
                    </div>
                      <button style="margin-top: 10px; ;" type="submit" class="btn "><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
              </li>
              </ul>
              <ul class="nav pull-right">      
        <li class="pull-right"><a href="<?php echo e(route('monpanier')); ?>">
						<i class="fas fa-shopping-basket"></i>
        <span class="badge badge-pill badge-dark"> <?php echo e(Cart::count()); ?> </span></a></li>
        </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
	</div><!-- /.navbar-wrapper -->
	
	<div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="contain">
            </div> 
        </div>
    </div>

    <div class="container marketing"><?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/header.blade.php ENDPATH**/ ?>