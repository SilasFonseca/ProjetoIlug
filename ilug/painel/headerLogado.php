    


    <header class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <a class="navbar-brand" href="index.php">
              <img class="logo" src="images/ilug_logo.png">
            </a>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="indexLogado.php">Início</a></li>
                <li><a href="aboutLogado.php">Sobre</a></li>
                <li><a href="contactLogado.php">Contato</a></li>
                <li class="active"><a href="#"><span class="border-left pl-xl-4"><?php echo $_SESSION["usuario"];?></a></li>
               <li><a href="sairLogado.php" class="">Sair</a></li>
                <li><a href="painel/anuncio.php" class="cta"><span class="bg-primary text-white rounded">Anunciar</span></a></li>
              </ul>
            </nav>
          </div>

      
         
          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>