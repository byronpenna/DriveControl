<!doctype html>
<html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Contacto - Script Personal</title>
 
<!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
 
<body>
  <div id="formulario">
   <form role="form" action="php/contacto.php" method="POST" id="contacto" title="Nombre">
   <label for="nombre">Nombre</label>
   <input name="nombre" type="text" required="required" id="nombre" placeholder="nombre" tabindex="1" title="Nombre">
   <br>
   <label for="email">Email</label>
   <input name="email" type="email" required="required" id="email" placeholder="email" tabindex="2" title="Email">
   <br>
   <label for="telefono">Teléfono</label>
   <input name="telefono" type="text" id="telefono" placeholder="telefono" tabindex="3" title="Telefono">
   <br>
   <label for="ciudad">Ciudad</label>
   <input name="ciudad" type="text" id="ciudad" placeholder="ciudad" tabindex="4" title="ciudad">
   <br>
   <label for="pais">País</label>
   <input name="pais" type="pais" id="pais" placeholder="pais" tabindex="5" title="pais">
   <br>
   <label for="Mensaje">Mensaje</label>
   <textarea name="mensaje" rows="4" id="mensaje" placeholder="mensaje" tabindex="6"></textarea>
   <br>
   <input type="submit" name="enviar" tabindex="7" value="Enviar"><input type="reset" tabindex="8" value="Borrar">
   <input type="hidden" name="estado" value="1">
   </form>
  </div>
</body>
</html>
- See more at: http://www.render2web.com/formulario-de-contacto-html-5-php-y-bootstraps/#sthash.D5DNef1n.dpuf