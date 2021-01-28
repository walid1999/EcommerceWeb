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
            <a class="brand" href="#">Touti Louni</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="home">Accueil</a></li>
                <li><a href="articles">Articles</a></li>
				        <?php if(auth()->check()): ?>

                    <li class="dropdown">
                  <a href="<?php echo e(route('mon-compte')); ?>" class="dropdown-toggle" data-toggle="dropdown"> Espace Client <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo e(route('mon-compte')); ?>">Mon profil</a></li>
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
				        <li><a href="panier">Mon panier</a></li>
                <li><a href="sav">Service Client</a></li>
				        <li><a href="about">A propos</a></li>				                 
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
	</div><!-- /.navbar-wrapper -->
    
<div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../assets/img/wakerz.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Sign up today</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/examples/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
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
          <h2><?php echo e($product->titre); ?> </h2>
          <h3> <?php echo e($product->prix); ?> € </h3>
          <p><a class="btn" href="<?php echo e(route('article', $product->id_article)); ?>">Voir Produit </a></p>
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

<?php /**PATH C:\Users\Elodie Turam\Documents\GitHub\EcommerceWeb\resources\views/home.blade.php ENDPATH**/ ?>