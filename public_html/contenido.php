<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contenido</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body>

        <div class="wrap">
            <header id="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <button id="primary-nav-button" type="button">Menu</button>
                            <a href="index.html"><div class="logo">
                                    <img src="img/logo.png" alt="Venue Logo">
                                </div></a>
                            <nav id="primary-nav" class="dropdown cf">
                                <ul class="dropdown menu">
                                    <li><a href="index.php">Inicio</a></li>

                                    <li class='active'><a href="contenido.php">Contenido</a></li>

                                    <li><a href="agendarHora.php">Agenda tu hora</a></li>

                                    <li><a href="contacto.php">Contacto</a></li>
                                </ul>
                            </nav><!-- / #primary-nav -->
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <main>
            <!-- Place <div> tag where you want the feed to appear -->
            <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
            <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
            <script type="text/javascript">
                /* curator-feed-default-feed-layout */
                (function () {
                    var i, e, d = document, s = "script";
                    i = d.createElement("script");
                    i.async = 1;
                    i.src = "https://cdn.curator.io/published/c2594e05-ca43-4373-b801-4a0d26fca2db.js";
                    e = d.getElementsByTagName(s)[0];
                    e.parentNode.insertBefore(i, e);
                })();
            </script>
        </main>
        <!--
      <section class="banner banner-secondary" id="top" style="background-image: url(img/banner-image-1-1920x300.jpg);">
          <div class="container">
              <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                      <div class="banner-caption">
                          <div class="line-dec"></div>
                          <h2>Blog</h2>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  
      <main>
          <section class="featured-places">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-9 col-md-8 col-xs-12">
                          <div class="row">
                              <div class="col-sm-6 col-xs-12">
                                  <div class="featured-item">
                                      <div class="thumb">
                                          <div class="thumb-img">
                                              <img src="img/blog-1-720x480.jpg" alt="">
                                          </div>
  
                                          <div class="overlay-content">
                                           <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                          </div>
                                      </div>
  
                                      <div class="down-content">
                                          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>
  
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>
  
                                          <div class="text-button">
                                              <a href="agendarHora.html">Read More</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-sm-6 col-xs-12">
                                  <div class="featured-item">
                                      <div class="thumb">
                                          <div class="thumb-img">
                                              <img src="img/blog-2-720x480.jpg" alt="">
                                          </div>
  
                                          <div class="overlay-content">
                                           <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                          </div>
                                      </div>
  
                                      <div class="down-content">
                                          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>
  
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>
  
                                          <div class="text-button">
                                              <a href="agendarHora.html">Read More</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-sm-6 col-xs-12">
                                  <div class="featured-item">
                                      <div class="thumb">
                                          <div class="thumb-img">
                                              <img src="img/blog-3-720x480.jpg" alt="">
                                          </div>
  
                                          <div class="overlay-content">
                                           <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                          </div>
                                      </div>
  
                                      <div class="down-content">
                                          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>
  
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>
  
                                          <div class="text-button">
                                              <a href="agendarHora.html">Read More</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-sm-6 col-xs-12">
                                  <div class="featured-item">
                                      <div class="thumb">
                                          <div class="thumb-img">
                                              <img src="img/blog-4-720x480.jpg" alt="">
                                          </div>
  
                                          <div class="overlay-content">
                                           <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                          </div>
                                      </div>
  
                                      <div class="down-content">
                                          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>
  
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>
  
                                          <div class="text-button">
                                              <a href="agendarHora.html">Read More</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-sm-6 col-xs-12">
                                  <div class="featured-item">
                                      <div class="thumb">
                                          <div class="thumb-img">
                                              <img src="img/blog-5-720x480.jpg" alt="">
                                          </div>
  
                                          <div class="overlay-content">
                                           <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                          </div>
                                      </div>
  
                                      <div class="down-content">
                                          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>
  
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>
  
                                          <div class="text-button">
                                              <a href="agendarHora.html">Read More</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-sm-6 col-xs-12">
                                  <div class="featured-item">
                                      <div class="thumb">
                                          <div class="thumb-img">
                                              <img src="img/blog-6-720x480.jpg" alt="">
                                          </div>
  
                                          <div class="overlay-content">
                                           <strong title="Author"><i class="fa fa-user"></i> John Doe</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Posted on"><i class="fa fa-calendar"></i> 12/06/2020 10:30</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                           <strong title="Views"><i class="fa fa-map-marker"></i> 115</strong>
                                          </div>
                                      </div>
  
                                      <div class="down-content">
                                          <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</h4>
  
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim consectetur assumenda nam facere voluptatibus totam veritatis. </p>
  
                                          <div class="text-button">
                                              <a href="agendarHora.html">Read More</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
  
                      <div class="col-lg-3 col-md-4 col-xs-12">
                          <div class="form-group">
                              <h4>Blog Search</h4>
                          </div>
  
                          <div class="form-group">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
  
                                  <span class="input-group-addon"><a href="#"><i class="fa fa-search"></i></a></span>
                              </div>
                          </div>
  
                          <br>
  
                          <div class="form-group">
                              <h4>Lorem ipsum dolor sit amet</h4>
                          </div>
  
                          <p><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quae animi sint.</a></p>
                          <p><a href="#">Non, magni, sequi. Explicabo illum quas debitis ut hic possimus, nesciunt mag!</a></p>
                          <p><a href="#">Vatae expedita deleniti optio ex adipisci animi, iusto tempora. </a></p>
                          <p><a href="#">Soluta non modi dolorem voluptates. Maiores est, molestiae dolor laborum.</a></p>
                      </div>
                  </div>
              </div>
          </section>
      </main>-->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-veno">
                            <div class="logo">
                                <img src="img/footer_logo.png">
                            </div>
                            <h4>Redes sociales:</h4>
                            </br>
                            <ul class="social-icons">
                                <li class="socialmargin">
                                    <a href="https://www.facebook.com/psicologa.linares"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/ps.mariajose.caroca/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.doctoralia.cl/maria-jose-caroca-araya/psicologo/linares"><i class="fa fa-book"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="useful-links">
                            <div class="footer-heading">
                                <h4>Preguntas frecuentes</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-5">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-stop"></i>Métodos de pago</a></li>
                                        <li><a href="#"><i class="fa fa-stop"></i>¿Cómo agendar una hora?</a></li>
                                        
                                    </ul>
                                </div>
                                <div class="col-md-5">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-stop"></i>Método de atención</a></li>
                                        <li><a href="#"><i class="fa fa-stop"></i>¿Cómo ingresar a una sesión?</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-info">
                            <div class="footer-heading">
                                <h4>Información de contacto</h4>
                            </div>
                            <ul>
                                <li><span>Teléfono: </span>+56 9 3391 4571</li>
                                <li><span>Correo:</span>mjcaroca.araya@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/datepicker.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>