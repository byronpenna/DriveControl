<!DOCTYPE html>
<html>
<head>
  <title>Reseña de visitantes</title>
  <?php
    // estilos universales
      $this->load->view("parts/estilos.php");
  ?>
  <!-- estilos personalizados -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/resena/style.css") ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/resena/media.css") ?>>

<div class="container">
  <div class="row">
    <h2>Reseñas de usuarios</h2>
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
                    <p>Un buen servicio</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                        <
                <a title="" href="#">Anna</a>
                <i>from El Salvador</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">Me agrada atencion</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Gracias por su ayuda."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                       
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>Encontre muchas promociones en su pagina y pude ahorrar dinero </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img src="data:image/png;base64,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"/>
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
                    <p>Gracias."  </p>
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
                  <p>Gracias a que cree mi cuenta aca pude encontrar llantas para mi automovil super baratas </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img15.png">
                <a title="" href="#">Rannynm</a>
                <i>Guatemala</i>
              </div>
            </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Gracias a Driver Control encontre los repuestos de mi vehiculo</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img13.png">
                <a title="" href="#">Anna</a>
                <i>De El Salvador, San Salvador</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Me encanta el servicio de Driver Control"  </p>
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
</div>