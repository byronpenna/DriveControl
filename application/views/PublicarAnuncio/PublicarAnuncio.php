<<html>
<head>
	  <?php
    // estilos universales
  $this->load->view("parts/estilos.php");
  ?>

  <link rel="stylesheet" type="text/css" href=<?php echo base_url("Content/css/Anuncio/stile.css")  ?> >
	<title>SeccionAnuncios</title>
</head>
<body>
	<div class="login">
    <h1>Publique su anuncio</h1>
    <form action=<?php echo site_url('PublicarAnuncio/GuardarAnuncio')?> method="POST" enctype="multipart/form-data">
    <label> Titulo del anuncio</label> <br><input type="text" name="TituloAnuncio" value="" placeholder="Titulo " required><br>
       <label>  Descripcion del anuncio</label><br> <textarea class="form-control" name="DescripAnuncio" type="text" rows="5"  placeholder="Descripcion" required></textarea>
       <br>
       <div class="form-group">
        <label >Tipo de anuncio</label>
            <select class="form-control" name="TipoAnuncio">
            <?php 
            foreach ($tipoAnuncio as $key => $tipoA) {
             ?>
             <option value=<?php echo $tipoA ->idTipoAnuncio ?>>
              <?php echo $tipoA ->Anuncio ?> 
              <?php } ?>
            </option>



            </select>
    </div>



          <label>  Seleccione la imagen </label>   <input id="file-1" type="file" class="file" name="SubirImagen" required > 
 <label>Introduza la URL de compra</label><input type="text" name="URLAnuncio" value="" placeholder="URL" required><br><br><br>
	<label> <input type="date" class=" form-control txtNacimiento" name="txtInicio" required></input>  Fecha de Inicio</label> 
	<label>  <input type="date" class=" form-control txtNacimiento" name="txtFin" required></input> Fecha de Fin</label>
      <p class="submit"><input type="submit" name="commit" value="Publicar Anuncio"></p>
    </form>
  </div>

<script>
	$("#file-1").fileinput({
		showCaption: false,
		browseClass: "btn btn-primary",
		fileType: "any"
	});
	</script>

  <?php
  $this->load->view("parts/scripts.php");
  ?>
  <script type="text/javascript" src=<?php echo base_url("Content/js/Anuncio/fileinput.js") ?>></script>


</body>
</html>