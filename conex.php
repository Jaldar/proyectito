<?php
$conex=pg_connect("host=localhost dbname=Generador user=postgres port=5432 password=Alex1996")or die('no se puede conectart:'.pg_last_error());

/*$nombres= pg_query($conex,"select cedula, nombre from persona");
	if (!$nombres) {
		echo "error .\n";
	}

	while ($row=pg_fetch_row($nombres)) {
		 echo "cedula: $row[0]  nombre:$row[1]";
		 echo "<br/>\n";
	}
*/		
?>
