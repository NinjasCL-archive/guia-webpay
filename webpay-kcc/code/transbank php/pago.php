<?php
$TBK_MONTO="10000";
$TBK_ORDEN_COMPRA = date("Ymdhis");
$TBK_ID_SESION = date("Ymdhis");
/****************** CONFIGURACION *******************/
$TBK_TIPO_TRANSACCION = "TR_NORMAL";
$TBK_URL_EXITO = "http://IP_SERVIDOR/TIENDA_TEST/html/exito.php";
$TBK_URL_FRACASO = "http://IP_SERVIDOR/TIENDA_TEST/html/fracaso.php";
$url_cgi = "http://IP_SERVIDOR/TIENDA_TEST/cgi-bin/tbk_bp_pago.cgi";
//Archivos de datos para uso de pagina de cierre
$myPath = "/PATH_WWW/TIENDA_TEST/comun/dato$TBK_ID_SESION.log";
/****************** FIN CONFIGURACION *****************/
//formato Moneda
$partesMonto=split(",",$TBK_MONTO);
$TBK_MONTO=$partesMonto[0]."00";
//Grabado de datos en archivo de transaccion
$fic = fopen($myPath, "w+");
$linea="$TBK_MONTO;$TBK_ORDEN_COMPRA";
fwrite ($fic,$linea);
fclose($fic);
?>
<html>
<body >
<form action="<?php echo $url_cgi;?>" name="frm" method="post">
<table>
<tr>
<th align="right">Tipo Transaccion:</td>
<td><input type="text" name="TBK_TIPO_TRANSACCION" value="<?php echo $TBK_TIPO_TRANSACCION;?>"/></td>
</tr>
<tr>
<th align="right">Monto:</td>
<td><input type="text" name="TBK_MONTO" value="<?php echo $TBK_MONTO;?>"/></td>
</tr>
<tr>
<th align="right">Orden de Compra:</td>
<td><input type="text" name="TBK_ORDEN_COMPRA" value="<?php echo $TBK_ORDEN_COMPRA;?>"/></td>
</tr>
<tr>
<th align="right">TBK_ID_SESSION:</td>
<td><input type="text" name="TBK_ID_SESION" value="<?php echo $TBK_ID_SESION;?>"/></td>
</tr>
<tr>
<th align="right">Pagina de EXITO:</td>
<td><input type="text" name="TBK_URL_EXITO" value="<?php echo $TBK_URL_EXITO;?>"/></td>
</tr>
<tr>
<th align="right">Pagina de Fracaso:</td>
<td><input type="text" name="TBK_URL_FRACASO" value="<?php echo $TBK_URL_FRACASO;?>"/></td>
</tr>
<tr>
<td align="right" colspan="2"><input type="submit"></td>
</tr>
</table>
</form>
</body>
</html>
