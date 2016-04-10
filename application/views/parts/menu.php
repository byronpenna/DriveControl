

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
      <li class="active">
        <a href=<?php echo site_url("welcome/index") ?>>
          <span class="glyphicon glyphicon-home" aria-hidden="true"></span>   Inicio    
        </a>
      </li>
      <li class="active"><a href=<?php echo site_url("welcome/login") ?>><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>   Iniciar sesion   </a> </li>
      <li class="active"><a href=<?php echo site_url("welcome/registro") ?>> <span class="glyphicon glyphicon-user" aria-hidden="true">   Registrarse   </a></li>
      <li class="active">
          <a href=<?php echo site_url("Conctactos/contacto") ?> > 
              <span class="glyphicon glyphicon-envelope" aria-hidden="true">  Contactanos   
          </a>
      </li>
      <li class="active">
          <a href=<?php echo site_url("Componentes/index") ?> >
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true">   Informacion de Productos   
          </a>
      </li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-tasks" aria-hidden="true">   Empresas Asociadas  </a></li>
      <li class="active">
        <a href="#about">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true">   Acerca de nosotros   
        </a>
      </li>
 </ul>
  </div>
</nav>