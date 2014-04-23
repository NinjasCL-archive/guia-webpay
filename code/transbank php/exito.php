<?php
$TBK_ID_SESION = $_POST["TBK_ID_SESION"];
$TBK_ORDEN_COMPRA = $_POST["TBK_ORDEN_COMPRA"];
/****************** CONFIGURAR AQUI *******************/
$myPath = "/PATH_WWW/TIENDA_TEST/comun/MAC01Normal$TBK_ID_SESION.txt";
$pathSubmit = "http://IP_SERVIDOR/TIENDA_TEST/html/index.php";
/****************** FIN CONFIGURACION *****************/
//Rescate de los valores informados por transbank
$fic = fopen($myPath, "r");
$linea=fgets($fic);
fclose($fic);
$detalle=explode("&", $linea);
$TBK_ORDEN_COMPRA=explode("=",$detalle[0]);
$TBK_TIPO_TRANSACCION=explode("=",$detalle[1]);
$TBK_RESPUESTA=explode("=",$detalle[2]);
$TBK_MONTO=explode("=",$detalle[3]);
$TBK_CODIGO_AUTORIZACION=explode("=",$detalle[4]);
$TBK_FINAL_NUMERO_TARJETA=explode("=",$detalle[5]);
$TBK_FECHA_CONTABLE=explode("=",$detalle[6]);
$TBK_FECHA_TRANSACCION=explode("=",$detalle[7]);
$TBK_HORA_TRANSACCION=explode("=",$detalle[8]);
$TBK_ID_TRANSACCION=explode("=",$detalle[10]);
$TBK_TIPO_PAGO=explode("=",$detalle[11]);
$TBK_NUMERO_CUOTAS=explode("=",$detalle[12]);
$TBK_MAC=explode("=",$detalle[13]);
$TBK_FECHA_CONTABLE[1]=substr($TBK_FECHA_CONTABLE[1],2,2)."-".substr($TBK_FECHA_CONTABLE[1],0,2);
$TBK_FECHA_TRANSACCION[1]=substr($TBK_FECHA_TRANSACCION[1],2,2)."-".substr($TBK_FECHA_TRANSACCION[1],0,2);
$TBK_HORA_TRANSACCION[1]=substr($TBK_HORA_TRANSACCION[1],0,2).":".substr($TBK_HORA_TRANSACCION[1],2,2).":".substr($TBK_HORA_TRANSACCION[1],4,2);
?>
<html>
<head><title>TIENDA PHP KCC6.0</title></head>
<body>
<P ALIGN="CENTER">Transaccion Normal - EXITO</P><br>
<table align="center">
<tr><td align=left width=100% >El pago se ha realizado con &eacute;xito.</td></tr>
<tr><td align=left width=100% >Datos de la Compra:</td>
</tr>
<tr>
<td align=left width=100% >
<table>
<tr valign=top>
<th align=left>Nro Orden:</th>
<td align=left><?php echo $TBK_ORDEN_COMPRA[1];?></td>
<th align=left>Monto (pesos chilenos):</th>
<td align=left><?php echo ($TBK_MONTO[1]/100); ?></td>
</tr>
</table>
</td>
</tr>
<tr><td align=left width=100%><h3>Datos de la Transacci&oacute;n:</h3></td>
</tr>
<tr>
<td align=left width=100%>
<table width=90% border=0 align=center>
<tr valign=top >
<th align=left>Respuesta Transacci&oacute;n:</th>
<td align=left><?php echo $TBK_RESPUESTA[1];?></td>
<th align=left>Codigo Autorizaci&oacute;n:</th>
<td align=left><?php echo $TBK_CODIGO_AUTORIZACION[1];?></td>
<th align=left>Fecha Contable:</th>
<td align=left><?php echo $TBK_FECHA_CONTABLE[1];?></td>
</tr>
<tr valign=top >
<th align=left>Fecha Transacci&oacute;n:</th>
<td align=left><?php echo $TBK_FECHA_TRANSACCION[1];?></td>
<th align=left>Hora Transacci&oacute;n:</th>
<td align=left><?php echo $TBK_HORA_TRANSACCION[1];?></td>
<th align=left>tarjeta de cr&eacute;dito:</th>
<td align=left>XXXXXXXXXXXX<?php echo $TBK_FINAL_NUMERO_TARJETA[1];?></td>
</tr>
<tr valign=top>
<th align=left>Tipo Transacci&oacute;n:</th>
<td align=left><?php echo $TBK_TIPO_TRANSACCION[1];?></td>
<th align=left>Tipo Pago:</th>
<td align=left><?php echo $TBK_TIPO_PAGO[1];?></td>
<th align=left>Numero cuotas:</th>
<td align=left><?php echo $TBK_NUMERO_CUOTAS[1];?></td>
</tr>
</table>
</td>
</tr>
</table>
<FORM ACTION="<?php echo $pathSubmit;?>" METHOD=POST>
<center><INPUT TYPE="SUBMIT" VALUE="VOLVER A INICIO"></center>
</form>
</body>
</html>
