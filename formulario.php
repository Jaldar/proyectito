<?php 
require 'conex.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS/tran.css">
	<title></title>
  <script type="text/javascript" src="JQUERY/jquery.min.js"></script>
  <script type="text/javascript" src="JQUERY/main.js"></script>
<!--  <script type="text/javascript" src="JQUERY/metodos.js"></script>-->
</head>
<body>
<section class="formve">
  <form accept-charset="utf-8" method="POST">
 	  <label>Numero de Cedula O Pasaporte:</label>
  	<input class="controls" type="text" name="cedula" id="ced" autocomplete="off" onKeyUp="buscar();">
 	  <label>Apellidos y Nombres:</label>
  	<input class="controls" type="text" name="nombre" id="nombre" value='<?php echo $nombre; ?>' disabled="disabled">
  	<label>Ciudad:</label>
  	<input class="controls" type="text" name="ciudad" id="ciudad" value='<?php echo $ciudad; ?>' disabled="disabled">
  	<label>Domicilo:</label>
  	<input class="controls" type="text" name="domicilio" id="domicilio" value='<?php echo $domicilio; ?>' disabled="disabled">
  	<label>Correo Electronico:</label>
  	<input class="controls" type="email" name="correo" id="correo" value='<?php echo $correo; ?>' disabled="disabled">
  	<label>Telefono:</label>
  	<input class="controls" type="text" name="telefono" id="telefono" value='<?php echo $phone; ?>' disabled="disable">
    </form>
<div id="resultadobusqueda"></div>
 </section>
</body>
</html>