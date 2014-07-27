# Guía WebPay SOAP
Una pequeña guía para integrar el sistema de pago de Transbank.
La integración de  WebPay SOAP se detallará a continuación. Para la integración de WebPay KCC ver la guía correspondiente.

## Conceptos Previos
El manual de Transbank indica que se debe conocer algunas tecnologías antes de implementar una integración con su sistema SOAP. En este apartado veremos esos conceptos de forma general, con el fin de comprender mejor lo que se implementará.

### Arquitectura Orientada a Servicios (*Service Oriented Arquitecture* SOA en inglés)
Esta forma de diseñar los sistemas permite comunicar diferentes componentes, independientes de su tecnología usada para su creación.

Es decir, facilita la estructuración de grandes sistemas complejos en sub sistemas más pequeños y mantenibles, que pueden estar creados con distintas base de datos y/o lenguajes de programación.

Por ejemplo, podemos comunicar un sistema programado en Java que utiliza Oracle como base de datos, con un sistema programado en PHP con MySQL como base de datos.


### Servicios Web
Un servicio web (*Web Service*) es lo que permite la comunicación entre sistemas necesarias para la arquitectura orientada a servicios. Existen distintas formas de crear un servicio web, entre las cuales podemos mencionar a: SOAP, REST y RPC.

#### SOAP
*Simple Object Access Protocol* (Protocolo Simple de Acceso a Objetos). Es un protocolo estándar que define cómo dos objetos en diferentes procesos pueden comunicarse por medio de intercambio de datos XML. Es la forma que utiliza WebPay para comunicarse, será detallada posteriormente.

#### REST
*Representational State Transfer* (Transferencia de Estado Representacional, REST). REST es un tipo de servicio web en el que el usuario simplemente accede a la URL y la respuesta es un documento XML o JSON. En REST, el énfasis se pone en los recursos, o sustantivos; especialmente en los nombres que se le asigna a cada tipo de recurso.

#### RPC
*Remote Procedure Call* (Llamada a Procedimiento Remoto). En este caso, los comandos se envían a un sistema a través de XML o JSON. En RPC, se pone el énfasis en la diversidad de operaciones del protocolo, o verbos.

### SOAP

#### Componentes

#### WSDL

#### WS-Security



# Referencias

http://msaffirio.wordpress.com/2006/02/05/%C2%BFque-son-los-web-services/

http://www.desarrolloweb.com/manuales/61/

http://cyfuss.com/tecnologias-web-services/

https://sites.google.com/site/camoralesma/articulo2.pdf?attredirects=0

http://users.dsic.upv.es/~rnavarro/NewWeb/docs/RestVsWebServices.pdf

http://www.experti.cl/webpay-onclick/

http://en.wikipedia.org/wiki/SOAP

http://es.wikipedia.org/wiki/Representational_State_Transfer

http://es.wikipedia.org/wiki/Remote_Procedure_Call

http://www.ibm.com/developerworks/ssa/webservices/tutorials/ws-understand-web-services1/

http://www.ibm.com/developerworks/ssa/webservices/tutorials/ws-understand-web-services2/

http://www.ibm.com/developerworks/ssa/webservices/tutorials/ws-understand-web-services3/

http://www.ibm.com/developerworks/ssa/webservices/tutorials/ws-understand-web-services4/

http://www.ibm.com/developerworks/ssa/webservices/tutorials/ws-understand-web-services5/

http://www.ibm.com/developerworks/ssa/webservices/tutorials/ws-understand-web-services6/

http://www.ibm.com/developerworks/ssa/webservices/tutorials/ws-understand-web-services8/

http://www.iprofesional.com/notas/46399-Qu-es-SOA-la-arquitectura-orientada-a-servicios

https://www.oasis-open.org/committees/download.php/16790/wss-v1.1-spec-os-SOAPMessageSecurity.pdf