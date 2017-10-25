# Guía de WebPay
Este repositorio contiene distintas guías para aprender a utilizar el sistema de pagos WebPay. Este documento se está creando de forma paulatina, cualquier contribución es bienvenida.

Fecha: Enero 2014, Mayo, Septiembre, Noviembre 2015, Febrero 2016, Septiembre 2017

Autor: Camilo Castro <camilo@ninjas.cl>

Versión: 1.4.0

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


## ¿Qué es WebPay?
Webpay es una pasarela de pago desarrollada por [Transbank](https://www.transbank.cl) para realizar transacciones desde Internet con tarjetas bancarías de crédito y débito. Hoy en día Webpay constituye una herramienta clave para el desarrollo de un comercio electrónico eficaz y seguro en Chile.

Transbank tiene dos productos para permitir la recepción de pagos. El primero es ~WebPay KCC~ (**OBSOLETO**), el cual se instala en los servidores de la tienda. El segundo producto es WebPay SOAP, un servicio web donde el software de la tienda debe interactuar mediante llamadas SOAP (*Simple Object Access Protocol*) para realizar las transacciones.

### KCC Vs SOAP

**Importante**

```
KCC ha sido catalogado como obsoleto. 
Esto quiere decir que nuevas integraciones deben usar SOAP obligatoriamente.
```    

### ¿Qué es *OneClick*?
Webpay OneClick permite mejorar la experiencia de compra del usuario, permitiendo que éste registre una única vez los datos de su tarjeta, una vez realizado el proceso es posible comprar con la agilidad de un click. Funciona utilizando SOAP.

## Alternativas a Webpay

Si no se desea tener un contrato directo con Transbank se puede utilizar los siguientes proveedores que entregan una plataforma propia para aceptar pagos.

- [Flow.cl](http://www.flow.cl)
- [Khipu](http://www.khipu.cl)
- [Uanbai](http://www.uanbai.cl)
- [Pago Fácil](https://www.pagofacil.org/)
- [Multicaja.cl](http://www.multicaja.cl) (Paypal)

## Otros Materiales


### Transbank Developers
Sitio web con información sobre la integración de Webpay. Permite obtener un certificado digital sobre conocimientos de webpay.

http://www.transbankdevelopers.cl/

