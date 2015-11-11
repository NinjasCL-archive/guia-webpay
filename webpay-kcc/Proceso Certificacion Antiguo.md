# Proceso Certificación
El proceso de certificación ya no es el detallado como está en este documento. Se ha conservado la información con motivos de respaldo. Revisar el archivo README.md para obtener la última versión del proceso de certificación.

## Paso 1 - Documento de Pre Certificación
Se debe llenar el documento word llamado *"Ficha Certificación Webpay 6.docx"* y enviarlo a *soporte@transbank.cl* solicitando comenzar el proceso de certificación.

### Datos Necesarios
Los datos solicitados en el documento son los siguientes:

#### Datos del Comercio 
Dato | Descripción | Ejemplo
------------ | ------------- | ------------
Motivo de certificación|La razón de por qué se solicita la certificación| El comercio ha firmado contrato Webpay con Transbank, realizó la integración del kit de desarrollo y quiere habilitar las ventas a través de dicho producto por primera vez.|
Nombre de fantasía|Nombre de fantasía de la empresa que firmó contrato con Transbank.|Cervezapps|
Rut del Comercio|Rut de la empresa que firmó contrato con Transbank.|7039391838-5|
Código de Comercio Pesos|Código de Comercio Otorgado por Transbank al momento de firmar contrato.|388381282|
Código de Comercio Dólar|Código de Comercio Otorgado por Transbank al momento de firmar contrato.|388381282|

#### Datos del Representante

Dato | Descripción | Ejemplo
------------ | ------------- | ------------
Nombre|Nombre del Representante Legal de la empresa| Camilo Castro|
Email | Correo del Representante Legal de la empresa | camilo@cervezapps.cl |
Teléfono | Teléfono del Representante Legal de la empresa | +569 000 000 000 |

#### Datos del Contacto Técnico
El contacto técnico es la persona encargada de integrar Webpay al comercio.

Dato | Descripción | Ejemplo
------------ | ------------- | ------------
Cont. Técnico|Nombre del Contacto Técnico|Camilo Castro|
Teléfono | Teléfono del Contacto Técnico|+569 000 000 000 |
Email|Email del Contacto Técnico|camilo@cervezapps.cl|
URL Pruebas| Sitio web del comercio| http://www.cervezapps.cl/shop
Plataforma| Arquitectura donde funciona el KCC (Linux 32, Linux 64, Windows 32, Windows 64) | Linux 64
URL Completa de la Página de Cierre | URL con el mismo valor puesto en HTML_TR_NORMAL.|http://cervezapps.cl/webpay/confirmar.php |
Datos de Prueba |Datos necesarios para comprobar el correcto funcionamiento del KCC. Incluir usuarios y contraseñas de prueba y rutas relacionadas.| Usuario:mikeller Contraseña:cerveza1234 Url: http://cervezapps.cl/shop/login
Comentarios|Algun dato importante a mencionar.|Debe comprar como mínimo 5 productos para activar WebPay.|

## Paso 2 - Envío de Logs
Una vez que transbank realizó las pruebas pertinentes se debe crear un comprimido con los siguientes archivos y enviarlo a *soporte@transbank.cl* :

* cgi-bin/datos/tbk_config.dat
* cgi-bin/log/tbk_bitacora_TR_NORMAL_MMdd.log
* cgi-bin/log/TBK_EVNaaaMMdd.log
* El código fuente de la página de cierre. (Ej: xt_compra.php)

Donde MMdd es Mes/Día y aaaaMMdd es Año/Mes/Día

Ejemplo para el 01 de Abril del 2014

	TBK_EVN20140401.log
	tbk_bitacora_TR_NORMAL_0401.log
	
**Nota**
> El comprimido debe ser subido al servidor donde se encuentra la página web (Ej: http://cervezapps.cl/webpay.zip). Y enviarse como URL en el correo. No debe adjuntarse en el email.