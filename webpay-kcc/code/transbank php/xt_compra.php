<?php
//rescate de datos de POST.
$TBK_RESPUESTA=$_POST["TBK_RESPUESTA"];
$TBK_ORDEN_COMPRA=$_POST["TBK_ORDEN_COMPRA"];
$TBK_MONTO=$_POST["TBK_MONTO"];
$TBK_ID_SESION=$_POST["TBK_ID_SESION"];
/****************** CONFIGURAR AQUI *******************/
$myPath = "/PATH_WWW/TIENDA_TEST/comun/dato$TBK_ID_SESION.log";
//GENERA ARCHIVO PARA MAC
$filename_txt = "/PATH_WWW/TIENDA_TEST/comun/MAC01Normal$TBK_ID_SESION.txt";
// Ruta Checkmac
$cmdline = "/PATH_WWW/TIENDA_TEST/cgi-bin/tbk_check_mac.cgi $filename_txt";
/****************** FIN CONFIGURACION *****************/
$acepta=false;
//lectura archivo que guardo pago.php
if ($fic = fopen($myPath, "r")){
$linea=fgets($fic);
fclose($fic);
}
$detalle=split(";", $linea);
if (count($detalle)>=1){
$monto=$detalle[0];
$ordenCompra=$detalle[1];
}
//guarda los datos del post uno a uno en archivo para la ejecución del MAC
$fp=fopen($filename_txt,"wt");
while(list($key, $val)=each($_POST)){
fwrite($fp, "$key=$val&");
}
fclose($fp);
//Validación de respuesta de Transbank, solo si es 0 continua con la pagina de cierre
if($TBK_RESPUESTA=="0"){ $acepta=true; } else { $acepta=false; }
//validación de monto y Orden de compra
if ($TBK_MONTO==$monto && $TBK_ORDEN_COMPRA==$ordenCompra && $acepta==true){ $acepta=true;}
else{ $acepta=false;}
//Validación MAC
if ($acepta==true){
exec ($cmdline, $result, $retint);
if ($result [0] =="CORRECTO") $acepta=true; else $acepta=false;
}
?>
<html>
<?php if ($acepta==true){?>
ACEPTADO
<?php } else {?>
RECHAZADO
<?php }?>
</html>
