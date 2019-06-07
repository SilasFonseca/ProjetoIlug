<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>ILUG &mdash; Site de aluguel de imóveis</title>
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
     
    <?php
      session_start();
    ?>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
  
  <?php include 'headerLogado.php'; ?>

    <div class="site-blocks-cover overlay" style="background-image: url(images/fundoilug.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-12">
            
            
            <div class="row justify-content-center mb-4">
              <div class="col-md-8 text-center">
                <h1 class="" data-aos="fade-up">Seja bem-vindo ao iLug</h1>
                <p data-aos="fade-up" data-aos-delay="100">Quer alugar? O iLug é o lugar!</p>
              </div>
            </div>

            <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
              <form method="post">
                <div class="row align-items-center">
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                    <input type="text" class="form-control rounded" placeholder="O que gostaria de buscar?">
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="wrap-icon">
                      <span class="icon icon-room"></span>
                      <input type="text" class="form-control rounded" placeholder="Localização">
                    </div>
                    
                  </div>
                  <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                    <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control rounded" name="" id="">
                        <option value="">Categorias</option>
                        <optgroup label="Residencia">
                          <option value="">Apartamento</option>
                          <option value="">Casa</option>
                          <option value="">Condomínio</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2 ml-auto text-right">
                    <input type="submit" class="btn btn-primary btn-block rounded" value="Buscar">
                  </div>
                  
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-white">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Anúncios Patrocinados</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">

          <div>            
            <div class="testimonial">
              <a href="exemple_page.html">
              <figure class="mb-4">
                <img src="images/casa6.jpg" alt="Image" class="img-fluid mb-3">
                <p>Casa em Maragogi</p>
              </figure>
              </a>
              <blockquote>
                <p>&ldquo;Casa ampla, 4 suítes, piscina proximo a belissima praia de Peroba em Maragogi
                Casa de praia com piscina com cascata, deck , garagem para até seis carros, mobiliada, com quatro suítes cada um com uma cama de casal tamanho Queen, cozinha, despensa, ampla sala mobiliada, espaço para leitura, boa iluminação e ventilação. Proximo a excelentes restaurantes e a maravilhosa praia de Peroba. Ficando localizada a 5 km de Sao José da Coroa Grande e 12 km de Maragogi. 120 km do Aeroporto de Recife.&rdquo;</p>
              </blockquote>
            </div>          
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/casa4.jpg" alt="Image" class="img-fluid mb-3">
                <p>Linda casa próximo a praia</p>
              </figure>
              <blockquote>
                <p>&ldquo;Linda casa em condominio fechado prómixo a praia com garagem espaçosa, piscina e banheira de hidromassagem, ofurô, açude lotado de peixe. Ótima para festas. Alugue agora.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/casa5.jpg" alt="Image" class="img-fluid mb-3">
                <p>Casa </p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="images/ap01.jpg" alt="Image" class="img-fluid mb-3">
                <p>Apartamento topper</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="h5 mb-4 text-black">Ultimas Postagens</h2>
          </div>
        </div>
        
		    <?php
			  
			//PHP PDO
			//Database connection by using PHP PDO
				$username = 'root';
				$password = 'aluno';
				
				$connection = new PDO('mysql:host=localhost;dbname=ilug', $username, $password ); 
			  
			    $statement = $connection->prepare("SELECT * FROM imoveis ORDER BY ID DESC");
				$statement->execute();
				$result = $statement->fetchAll(); 
							  
			
			   foreach($result as $row)
			   {
				
			  
			  ?>
		
		<div class="row">
          <div class="col-12  block-13">
            <div class="owl-carousel nonloop-block-13">
          
			  
              <div class="d-block d-md-flex listing vertical">
                <a href="listings-singleLogado.php" class="img d-block" style="background-image: url('images/casa1.jpg')"></a>
                <div class="lh-content">
                  <span class="categoria"><? echo $row['ID']?></span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-singleLogado.php"><? echo $row['TITULO']?></a></h3>
                  <address><?echo $row['DESCRICAO']?></address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Avaliações)</span>
                  </p>
                </div>
              </div>
          
        
       

         
          

              

            </div>
          </div>

            
     
          
        </div>
		<?php
		   echo  $row['ID'];  
			   }   
		?>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left border-primary">
            <h2 class="font-weight-light text-primary">Imóveis Populares</h2>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6">

            <div class="d-block d-md-flex listing">
              <a href="listings-singleLogado.php" class="img d-block" style="background-image: url('images/casa1.jpg')"></a>
              <div class="lh-content">
                <span class="categoria">Apartamento</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-singleLogado.php">Apartamento com vista para o mar</a></h3>
                <address>Rua Divaldo Suruagy, Cidade Universitaria, Maceió</address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Avaliações)</span>
                </p>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="listings-singleLogado.php" class="img d-block" style="background-image: url('images/casa2.jpg')"></a>
                <div class="lh-content">
                  <span class="categoria">Apartamento</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-singleLogado.php">Apartamento com vista para o mar</a></h3>
                  <address>Rua Divaldo Suruagy, Cidade Universitaria, Maceió</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Avaliações)</span>
                  </p>
                </div>
              </div>

              <div class="d-block d-md-flex listing">
                <a href="listings-singleLogado.php" class="img d-block" style="background-image: url('images/casa3.jpg')"></a>
                <div class="lh-content">
                  <span class="categoria">Apartamento</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-singleLogado.php">Apartamento com vista para o mar</a></h3>
                  <address>Rua Divaldo Suruagy, Cidade Universitaria, Maceió</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Avaliações)</span>
                  </p>
                </div>
              </div>

             

          </div>
          <div class="col-lg-6">

            <div class="d-block d-md-flex listing">
              <a href="listings-singleLogado.php" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
              <div class="lh-content">
                <span class="categoria">Casa</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-singleLogado.php">Casa de praia</a></h3>
                <address>Rua Divaldo Suruagy, Cidade Universitaria, Maceió</address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Avaliações)</span>
                </p>
              </div>
            </div>

            <div class="d-block d-md-flex listing">
              <a href="listings-singleLogado.php" class="img d-block" style="background-image: url('images/casa1.jpg')"></a>
              <div class="lh-content">
                <span class="categoria">Apartamento</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="listings-singleLogado.php">Apartamento com vista para o mar</a></h3>
                <address>Rua Divaldo Suruagy, Cidade Universitaria, Maceió</address>
                <p class="mb-0">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-secondary"></span>
                  <span class="review">(3 Avaliações)</span>
                </p>
              </div>
            </div>
            <div class="d-block d-md-flex listing">
                <a href="listings-singleLogado.php" class="img d-block" style="background-image: url('images/casa2.jpg')"></a>
                <div class="lh-content">
                  <span class="categoria">Apartamento</span>
                  <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                  <h3><a href="listings-singleLogado.php">Apartamento com vista para o mar</a></h3>
                  <address>Rua Divaldo Suruagy, Cidade Universitaria, Maceió</address>
                  <p class="mb-0">
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-warning"></span>
                    <span class="icon-star text-secondary"></span>
                    <span class="review">(3 Avaliações)</span>
                  </p>
                </div>
              </div>

          </div>
        </div>
      </div>
    </div>
 
  <?php include '.../footer.php'; ?>
 
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