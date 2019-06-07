<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro ILUG &mdash; Site de aluguel de imóveis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
<?php 
session_start();
include 'header.php'; 
?>

  
    
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/background_casas.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Cadastro</h1>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade">

            

            <form name="signup" method="post" action="cadastrando.php" class="p-5 bg-white">
            
              
            <?php
              //if ($_SESSION['status_cadastrado']):
            if(isset($_SESSION["mensagem"])):
               print $_SESSION["mensagem"];
               unset($_SESSION["mensagem"]);
            endif; 
            ?>
             <!-- <div class="notification is-success">
                  <p>Cadastro efetuado!</p>
                  <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
              </div> -->


              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Nome</label> 
                  <input type="text" id="tnome" class="form-control name " name="nome"  placeholder = "Ex: João" >
                </div>
              </div>
			  
			  
			  
			         <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">E-mail</label> 
                  <input type="email" id="tmail" class="form-control email " name="email" placeholder = "Ex: João@hotmail.com" >
                </div>
              </div>
		
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Senha</label> 
                  <input type="password" id="subject" class="form-control password" name="senha" size="8" maxlength="10" placeholder ="" >
               
			   </div>
              </div> 

              <div class="row form-group">
                <div class="col-12">
                  <p>Já é cadastrado? <a href="login.html">Faça login</a></p>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Cadastrar" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
<?php include 'footer.php'; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>