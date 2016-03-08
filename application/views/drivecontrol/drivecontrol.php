<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
  <style="type:text/css">
                .carousel-control.left,.carousel-control.right  {background:none;width:25px;}
                .carousel-control.left {left:-25px;}
                .carousel-control.right {right:-25px;}
                .broun-block {
                    background: url(<?php echo base_url("content/img/f19.png") ?>) repeat scroll center top rgba(0, 0, 0, 0);
                    padding-bottom: 34px;
                }
                .block-text {
                    background-color: #fff;
                    border-radius: 5px;
                    box-shadow: 0 3px 0 #2c2222;
                    color: #626262;
                    font-size: 14px;
                    margin-top: 27px;
                    padding: 15px 18px;
                }
                .block-text a {
                 color: #7d4702;
                    font-size: 25px;
                    font-weight: bold;
                    line-height: 21px;
                    text-decoration: none;
                    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
                }
                .mark {
                    padding: 12px 0;background:none;
                }
                .block-text p {
                    color: #585858;
                    font-family: Georgia;
                    font-style: italic;
                    line-height: 20px;
                }
                .sprite {
                  background-image: url(<?php echo base_url("content/img/f19.png") ?>);
                }
                .sprite-i-triangle {
                    background-position: 0 -1298px;
                    height: 44px;
                    width: 50px;
                }
                .block-text ins {
                    bottom: -44px;
                    left: 50%;
                    margin-left: -60px;
                }


                .block {
                    display: block;
                }
                .zmin {
                    z-index: 1;
                }
                .ab {
                    position: absolute;
                }

                .person-text {
                    padding: 10px 0 0;
                    text-align: center;
                    z-index: 2;
                }
                .person-text a {
                    color: #ffcc00;
                    display: block;
                    font-size: 14px;
                    margin-top: 3px;
                    text-decoration: underline;
                }
                .person-text i {
                    color: #fff;
                    font-family: Georgia;
                    font-size: 13px;
                }
                .rel {
                    position: relative;
                }
  </style>
<link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/principal/stile.css")?>>

</head>
<body>
  <header>
 <nav class="navbar navbar-default navbar-backgrnd navbar-fixed-top" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
<div class="navbar-header navbar-right">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<img src=<?php echo base_url("Content/img/drive.PNG") ?>></a>

</div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <br> <br> <br><br><ul class="nav navbar-nav navbar-left">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>   Inicio    </a></li>
      <li class="active"><a href=<?php echo base_url("index.php") ?>><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>   Iniciar sesion   </a> </li>
      <li class="active"><a href=<?php echo site_url("welcome/registro") ?>> <span class="glyphicon glyphicon-user" aria-hidden="true">   Registrarse   </a></li>
      <li class="active"><a href="#"> <span class="glyphicon glyphicon-envelope" aria-hidden="true">  Contactos   </a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true">   Informacion de Productos   </a></li>
 </ul>
  </div>
</nav>
</header>

 <!-- SLIDER -->
 <div class="Container">
<div id="#mySlider" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mySlider" data-slide-to="0" class="active"></li>
    <li data-target="#mySlider" data-slide-to="1"></li>
    <li data-target="#mySlider" data-slide-to="2"></li>
    <li data-target="##mySlider" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">
      <img src=<?php echo base_url("Content/img/s1.jpg") ?> alt="Chania">
      <div class="carousel-caption">
        <h3>DriveControl</h3>
        <p>Control total de tu carro</p>
      </div>
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/sl2.jpg") ?> alt="Chania">
      <div class="carousel-caption">
        <h3>DriveControl</h3>
        <p>Control total de tu carro</p>
      </div>
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/1d.jpg") ?> alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>

    <div class="item">
      <img src=<?php echo base_url("Content/img/1c.jpg") ?> alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div>
  </div>
  </div>


<a class="left carousel-control" href="#mySlider" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#mySlider" data-slide="next">
            <span class="icon-next"></span>
        </a>
  </div> 

  <!--RESEÑAS-->

   <div class="container">
  <div class="row">
    <h2>Comentarios de usuarios</h2>
  </div>
</div>
<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                        <img>
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we really don't need another one of these."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                        <img>
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>What a funny and entertaining film! I did not know what to expect, this is the fourth film in this vehicle's universe with the two Cars movies and then the first Planes movie. I was wondering if maybe Disney pushed it a little bit. However, Planes: Fire and Rescue is an entertaining film that is a fantastic sequel in this magical franchise. </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img>
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img13.png">
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we really don't need another one of these."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img14.png">
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>What a funny and entertaining film! I did not know what to expect, this is the fourth film in this vehicle's universe with the two Cars movies and then the first Planes movie. I was wondering if maybe Disney pushed it a little bit. However, Planes: Fire and Rescue is an entertaining film that is a fantastic sequel in this magical franchise. </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img15.png">
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Never before has there been a good film portrayal of ancient Greece's favourite myth. So why would Hollywood start now? This latest attempt at bringing the son of Zeus to the big screen is brought to us by X-Men: The last Stand director Brett Ratner. If the name of the director wasn't enough to dissuade ...</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img13.png">
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>The 2013 movie "The Purge" left a bad taste in all of our mouths as nothing more than a pseudo-slasher with a hamfisted plot, poor pacing, and a desperate attempt at "horror." Upon seeing the first trailer for "The Purge: Anarchy," my first and most immediate thought was "we really don't need another one of these."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img14.png">
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>What a funny and entertaining film! I did not know what to expect, this is the fourth film in this vehicle's universe with the two Cars movies and then the first Planes movie. I was wondering if maybe Disney pushed it a little bit. However, Planes: Fire and Rescue is an entertaining film that is a fantastic sequel in this magical franchise. </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img15.png">
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>                    
                </div>
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div><br><br><br>


    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <?php
      $this->load->view("parts/scripts.php");
    ?>
</body>
</html>


