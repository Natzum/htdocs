
<?php
function print_f($variable){
	$archivo = fopen("archivo.txt","a+");
	if (is_array($variable)) {
		foreach ($variable as $key) {
			fwrite($archivo,$key . ";\r");
		}

	}else {
		fwrite($archivo,$variable . ";\r");
				
	}
	fclose($archivo);
}


$aNotas= array(8,5,7,9,10);
$msg= "Error al enviar el correo electronico";




print_f($Notas);
print_f($msg);
?>