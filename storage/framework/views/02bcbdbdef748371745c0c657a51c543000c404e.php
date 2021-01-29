<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">
  <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/45109b19e5.js" crossorigin="anonymous"></script>


  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                  <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                  <link rel="shortcut icon" href="../assets/ico/favicon.png">
</head>

<body>

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
        <div class="item active">
          <img src="https://cdn.discordapp.com/attachments/642081853284548629/804455424114819091/kristian-llana-hw-01-bar-final-3.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Bienvenue !</h1>
              <p class="lead">..</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="https://cdnb.artstation.com/p/assets/images/images/013/606/913/4k/dennis-chan-spiderman-cover.jpg?1540381067" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">..</p>
              <a class="btn btn-large btn-primary" href="<?php echo e(route('articles')); ?>">Un grand nombre d'articles</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="https://cdna.artstation.com/p/assets/images/images/021/300/484/4k/sixmorevodka-studio-yasuo.jpg?1571152963" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Top des jeux</h1>
              <p class="lead">..</p>
              <a class="btn btn-large btn-primary" href="<?php echo e(route('inscription')); ?>">Inscrivez-vous</a>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
    

    <div class="container marketing">

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


<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap-transition.js"></script>
<script src="../assets/js/bootstrap-alert.js"></script>
<script src="../assets/js/bootstrap-modal.js"></script>
<script src="../assets/js/bootstrap-dropdown.js"></script>
<script src="../assets/js/bootstrap-scrollspy.js"></script>
<script src="../assets/js/bootstrap-tab.js"></script>
<script src="../assets/js/bootstrap-tooltip.js"></script>
<script src="../assets/js/bootstrap-popover.js"></script>
<script src="../assets/js/bootstrap-button.js"></script>
<script src="../assets/js/bootstrap-collapse.js"></script>
<script src="../assets/js/bootstrap-carousel.js"></script>
<script src="../assets/js/bootstrap-typeahead.js"></script>
<script>
  !function ($) {
    $(function(){
      // carousel demo
      $('#myCarousel').carousel()
    })
  }(window.jQuery)
</script>
<script src="../assets/js/holder/holder.js"></script>


</body>

</html>

<?php /**PATH C:\Users\Walid\Documents\GitHub\EcommerceWeb\resources\views/home.blade.php ENDPATH**/ ?>