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
				
				
                <!-- Read about Bootstrap dropdowns at https://getbootstrap.com/2.3.2/javascript.html#dropdowns -->
                
                    
                  
               
                  
                <li><a href="about">A propos</a></li>
              </ul>
              <ul class="nav pull-right">      
        <li class="pull-right"><a href="{{ route('monpanier') }}">
						<i class="fas fa-shopping-basket"></i>
        <span class="badge badge-pill badge-dark"> {{ Cart::count() }} </span></a></li>
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

    <div class="container marketing">