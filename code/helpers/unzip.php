<?php
/**
 * Descomprime el archivo webpay.zip
 * para asegurar de que los contenidos de cgi-bin
 * esten en modo BINARIO
 */

$zip = new ZipArchive();

$file = 'webpay.zip';

if ($zip->open($file)) 
{

	$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

	$zip->extractTo($path);

	$zip->close();


	chmod('tbk_bp_pago.cgi', 0755);
	chmod('tbk_bp_resultado.cgi', 0755);
	chmod('tbk_check_mac.cgi', 0755);
	chmod('datos/'. 0755);
	chmod('datos/tbk_param.txt', 0755);
	chmod('datos/tbk_config.dat', 0755);
	chmod('datos/tbk_trace.dat', 0755);
	chmod('maestros/', 0755);
	chmod('maestros/privada.pem', 0755);
	chmod('maestros/tbk_public_key.pem', 0755);
	chmod('maestros/tbk_public_key101prod.pem', 0755);
	chmod('log/', 0755);


	echo 'Descomprimido';

} 

else
{
	
	echo 'Error al Descomprimir';
}

/** Fin del Archivo unzip.php */
