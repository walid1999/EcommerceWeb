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
    
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
           
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">W/E</a>
            
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('articles') }}">Articles</a></li>

                @if(auth()->check())
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">Espace client<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('mon-compte') }}">Mon compte</a></li>
                    <li><a href="{{ route('deconnexion') }}">Se deconnecter</a></li>
                   
                    </li>
                @else

				          <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Espace client <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ route('inscription') }}">S'incrire</a></li>
                    <li><a href="{{ route('connexion') }}">Se connecter</a></li>
                    </li>
                @endif
				  </ul>
				
                <li><a href="sav">Service Client</a></li>
	
                
                <li><a href="about">A propos</a></li>
          
                <li class="pull-right"><a href="{{ route('monpanier') }}">
						      <i class="fas fa-shopping-basket"></i>
                  <span class="badge badge-pill badge-dark"> {{ Cart::count() }} </span></a>
                </li>
              </ul>
              <ul class="nav pull-right">  
              <li>
                <form action="{{ route('recherche') }}" style="display: flex; margin: 3px;";>
                    <div class="form-group " style="margin-top: 7px; height: 20px;">
                      <input type="text" name="search" class="form-control" value="{{ request()->search ?? '' }}">
                    </div>
                      <button style="margin-top: 7px; ;" type="submit" class="btn "><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
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
              <h1>Un grand nombre d'articles</h1>
              <p class="lead">Des stocks inépuisables grâce à notre équipe de choc.</p>
              <a class="btn btn-large btn-primary" href="{{ route('articles') }}">Voir les articles</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="https://cdna.artstation.com/p/assets/images/images/021/300/484/4k/sixmorevodka-studio-yasuo.jpg?1571152963" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Top des jeux</h1>
              <p class="lead">Des prix incroyable, les meilleurs du marché. Rejoignez nous maintenant pour en profiter au plus vite.</p>
              <a class="btn btn-large btn-primary" href="{{ route('inscription') }}">Rejoignez nous</a>
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
      
       @foreach($products as $product)
       <div class="span4">
          <img class="img-circle" data-src="holder.js/140x140" src="{{ $product->image }}">
          <h2>{{ $product->title }} </h2>
          <h3> {{$product->price}} € </h3>
          <p><a class="btn" href="{{ route('article', $product->id) }}">Voir Produit </a></p>
        </div><!-- /.span4 -->
       @endforeach   

      </div><!-- /.row -->


@include('footer')


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

