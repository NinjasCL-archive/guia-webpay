<?php
/**
 * Calcula el MD5 y los compara
 * para asegurar de que la integridad
 * de los archivos subidos al servidor
 * sea correcta.
 */

// Hashes

$md5s['tbk_pago'] = '9c842e6d5fa09a788a4388de9f79987e';

$md5s['tbk_resultado'] = '397c5fe57e245a32d2ce154ddb767381';

$md5s['tbk_check_mac'] = '06e14ad62efb823666ce014b8bdfac5c';

$md5s['tbk_param'] = '1d000f161fa0432fdea15396451f11a6';

$md5s['tbk_config'] = '2f46a5618198cd685805bbbcb498e68d';

$md5s['tbk_trace'] = 'd5afbe74d8e72f80c9b6f0d1c93f3138';

$md5s['privada'] = 'aabf697f63597c9ce0e6f8d949e13af4';

$md5s['tbk_public'] = 'f8947e768098ecb0eca0607e2d6a2562';

$md5s['tbk_public_101'] = '3d1fad60d7b984706f51e1f2fe2eac01';

// Archivos

$directory  = pathinfo(realpath('.'), PATHINFO_DIRNAME) . '/cgi-bin/';

$files['tbk_pago'] = $directory . 'tbk_bp_pago.cgi';

$files['tbk_resultado'] = $directory . 'tbk_bp_resultado.cgi'; 

$files['tbk_check_mac'] = $directory . 'tbk_check_mac.cgi';
 
$files['tbk_param'] =  $directory . 'datos/tbk_param.txt';

$files['tbk_config'] = $directory .  'datos/tbk_config.dat';
 
$files['tbk_trace'] = $directory . 'datos/tbk_trace.dat'; 

$files['privada'] =  $directory . 'maestros/privada.pem'; 

$files['tbk_public'] = $directory . 'maestros/tbk_public_key.pem';

$files['tbk_public_101'] = $directory . 'maestros/tbk_public_key101prod.pem';

// Comparación

foreach($md5s as $file => $hash) 
{
	if($hash === md5_file($files[$file]))
	{
		echo "<i>".  $file . "</i> Hash Igual (OK)<br>";
	} 
	else 
	{
		echo "<i><b>".  $file . "</b></i> Hash Diferente (?) <br>";
	}

}
/** Fin del Archivo md5check.php */
