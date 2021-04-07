<?php 
	include ('conex.php');
	$consultaBusqueda = $_POST['valorBusqueda'];

//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

//Variable vacía (para evitar los E_NOTICE)
$mensaje = "";
		if (isset($consultaBusqueda)) {
			 $consulta=pg_query($conex,"SELECT nombre, ciudad, domicilio, email, telefono from persona where cedula like '%$consultaBusqueda%'");
					$fila=pg_num_rows($consulta);
					if ($fila===0) {
						$mensaje="<p>no hay ningun usuario con este nombre</p>";
					}else {

						echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';
						while ($resultados=pg_fetch_assoc($consulta)) {
							$nombre=$resultados['nombre'];
							$ciudad=$resultados['ciudad'];
							$domicilio=$resultados['domicilio'];
							$correo=$resultados['email'];
							$phone=$resultados['telefono'];
						};
						$mensaje.=include 'formulario.php';
					};
	};
	//echo $mensaje;
 ?>