# Guía de WebPay
Este repositorio contiene distintas guías para aprender a utilizar el sistema de pagos WebPay. Este documento se está creando de forma paulatina, cualquier contribución es bienvenida.

Fecha: Enero 2014, Mayo, Septiembre, Noviembre 2015, Febrero 2016

Autor: Camilo Castro <camilo@cervezapps.cl>

Versión: 1.3.0

## Licencia
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Guía de Webpay</span> por <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.cervezapps.cl" property="cc:attributionName" rel="cc:attributionURL">Camilo Castro</a> se distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.


Safe Creative

Identificador: 1509255234196 

<a href="http://www.safecreative.org/work/1509255234196-guia-de-webpay" target="_blank">
<span>Guía de WebPay</span> -
<span>CC by-nc-sa 4.0</span> -
<span>Camilo Castro</span>
</a>

## Estructura del Repositorio
La estructura del repositorio es la siguiente:


| Directorio | Descripción |
|--------|--------|
|  webpay-kcc      | Detalla las características del sistema KCC de WebPay.       |
|webpay-soap| Detalla las características del sistema API SOAP de WebPay.|
|webpay-openshift| Detalla como instalar el KCC en los servidores gratuitos de [OpenShift](https://www.openshift.com/).|
|webpay-woocomerce| Detalla como integrar el KCC en el sistema e-commerce [WooCommerce](http://www.woothemes.com/woocommerce/).|
|webpay-php| Detalla como programar una integración a medida en PHP, que se integre con el KCC.|

## ¿Qué es WebPay?
Webpay es una pasarela de pago desarrollada por [Transbank](https://www.transbank.cl) para realizar transacciones desde Internet con tarjetas bancarías de crédito y débito. Hoy en día Webpay constituye una herramienta clave para el desarrollo de un comercio electrónico eficaz y seguro en Chile.

Transbank actualmente ofrece dos productos para permitir la recepción de pagos. El primero es WebPay KCC, el cual se instala en los servidores de la tienda. El segundo producto es WebPay SOAP, un servicio web donde el software de la tienda debe interactuar mediante llamadas SOAP (*Simple Object Access Protocol*) para realizar las transacciones.

### KCC Vs SOAP
Cada producto tiene sus usos idóneos, pero en el futuro es probable que Transbank solamente facilitará el producto WebPay SOAP, ya que elimina la necesidad de configuración del software en la tienda, reduciendo la disperción de las versiones y aumentando la seguridad.

En la tabla 1 se detallan las características de cada uno.

| KCC | SOAP |
|--------|--------|
|Existen softwares de integración con la mayoría de los sistemas de e-commerce como OpenCart, WooComerce, Prestashop y Magento.        |   Se debe programar la integración a medida, aún no existen integraciones "llegar y usar".     |
| Solamente funciona en entornos Web.      |    Puede ser configurado para cualquier entorno, ya sea Web, Móvil o Escritorio.   |
|    Relativamente sencillo de implementar.    |        Requiere conocimientos técnicos avanzados para su implementacion.|
|Actualización Manual| Actualización Automática|
|En servidores de la tienda| En servidores de Transbank|
| No permite *OneClick*| Permite utilizar *OneClick*|
|Soporte 24/7 vía email o teléfono| Soporte en horarios de oficina solo vía email|
|Disponibilidad de documentación y archivos para prueba sin necesidad de contrato| Documentación y archivos sólo mediante contrato previo.|

                           	Tabla 1: KCC vs SOAP

### ¿Cúal Usar?
Como se pudo apreciar en la Tabla 1, KCC sirve para tiendas pequeñas que necesiten vender productos con sistemas pre existentes como [WooComerce](http://www.woothemes.com/woocommerce/) u [OpenCart](http://www.opencart.com/). En Contraste, SOAP sirve para soluciones más complejas y elaboradas que deban integrarse en otros entornos que no sean Web, o que necesiten de la característica *OneClick*. Ambas guías están disponibles para su lectura.

### ¿Qué es *OneClick*?
Webpay OneClick permite mejorar la experiencia de compra del usuario, permitiendo que éste registre una única vez los datos de su tarjeta, una vez realizado el proceso es posible comprar con la agilidad de un click.

#### Usos de *OneClick*
Diversas empresas han aprovechado la característica *OneClick* de Transbank. Entre ellas mencionaremos a Copec, Groupon y Virgin Mobile.

##### Copec
La empresa Copec, la cual se especializa en la venta de combustibles para vehículos motorizados, ha desarrollado una aplicación para Android e iPhone. Esta aplicación permite pagar la carga de combustible sin necesidad de utilizar las tarjetas de crédito o débito, evitando el posible riesgo de clonación de tarjetas.

Para más información visitar:

https://www.pagoclick.cl/

##### Groupon
Groupon, empresa dedicada a la venta online de cupones de descuento para productos y servicios, permite a sus clientes pagar con tarjetas de crédito bancarias usando Webpay desde Internet. Sin embargo para clientes que compran en forma recurrente resulta poco cómodo y ágil ingresar los datos de su tarjeta y autenticarse con su banco en cada compra realizada. Por lo que han implementado la opción *OneClick* para agilizar el pago de las compras a dichos clientes.

Para más información visitar:

http://www.groupon.cl/

##### Virgin Mobile Chile
La empresa Virgin Mobile, dedicada a los servicios de telefonía celular, permite a sus usuarios recargar saldo mediante un "*twit*" en la red social twitter. Para esto utiliza los servicios de la empresa UANBAI, la cual integra *OneClick*.

Para más información visitar:

http://www.virginmobile.cl/recarga-en-redes-sociales

https://www.uanbai.com/

## Otros Materiales

### ChileForma
El curso http://www.chileforma.cl/ch/curso/webpay ofrece formación
presencial para personas y empresas sobre Webpay KCC.

Valor Aproximado : CLP $500.000 (app 724,5 dólares)

**Nota 1**: El autor no tiene relación alguna con ChileForma

**Nota 2**: Solo incluye KCC. Sin versión SOAP.

### Transbank Developers
Sitio web con información sobre la integración de Webpay. Permite obtener un certificado digital sobre conocimientos de webpay.

http://www.transbankdevelopers.cl/

### Aprende Webpay
Guía de pago (CLP $16.000, USD $23) sobre Webpay.

http://www.tuspagosweb.com/integrar-webpay.html

**Nota 1**: El autor no tiene relación con alguna Aprende Webpay

