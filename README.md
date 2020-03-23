# Introducción al maquetado HTML

## ¿Qué es un lenguaje de marcado?  

Un lenguaje de marcado es un lenguaje que utiliza una sintaxis especial para describir los elementos de un documento. Estos últimos se distinguen a través de indicadores, que permiten incrementar la semántica del contenido de dicho documento. 

## ¿Cuál es su utilidad?

La utilidad de un lenguaje de marcado reside en la posibilidad de especificar y diferenciar los componentes mencionados. Por ejemplo, para que el motor de renderizado de un navegador web pueda distinguir entre ellos. Y en líneas generales, sirven para cualquier contexto en que sea necesario definir tanto la estructura de un documento, como la importancia de los elementos y la forma en que estos se organizan. 

## ¿Qué es un tag? ¿Qué es un atributo?

Los tags son los indicadores utilizados para denotar a los elementos en sí. Se distinguen del resto del documento a través de una sintaxis determinada, dependiente de cada implementación específica de un lenguaje de marcado. 

Un atributo indica propiedades o información adicional de un elemento particular. Por ejemplo, para poder incorporar una imagen a un documento, necesitaremos un tag que permita introducir este recurso. Adicionalmente, es necesario indicar a quien quiera representar el documento, el path al origen de la imagen en cuestión. Esta dirección corresponde a una característica propia del recurso identificado con el tag, para lo cual utilizaremos un atributo.

## ¿Cuál es la utilidad de HTML? 

HTML es una implementación de un lenguaje de marcado, y como tal, permite especificar el contenido de un documento a través de etiquetas. Es el estándar utilizado para la elaboración de páginas web y, por lo tanto, es comprendido por todos los navegadores.  

## ¿Qué conjunto mínimo de tags debe contener un documento elaborado en este lenguaje? Describa brevemente su utilidad.

El conjunto mínimo de tags que deben estar presentes son:
<ul>
 <li>&lt;html>: es el elemento raíz del documento. Engloba todos los demás nodos.</li>
 <li>&lt;head>: contiene información, metadata, sobre el documento. </li>
 <li>&lt;title>: indica el título del documento. Debe ir dentro de la etiqueta <head>. </li>
 <li>&lt;body>: define el cuerpo del documento. Todo aquello que no sea metadata, ni encabezado. </li>
</ul>
 
## ¿Cuál es la utilidad e importancia de los enlaces o links entre páginas?  

La utilidad de los enlaces radica en la posibilidad de “navegar” o saltar entre páginas. Es decir, es el recurso que hace posible el desplazamiento entre una página y otra. 

## ¿Qué significa hipertexto?

Por definición, el hipertexto es “texto que contiene enlaces a otros textos”. Un enlace, en definitiva, es hipertexto. 

## ¿Un link solo puede apuntar a otra página? ¿Qué importancia tiene esto último?

Un link apunta a una url, es decir, que redirige al navegador a un recurso. Este recurso podría ser la misma página (por ej. el mismo archivo html), una página distinta, archivos descargables, o funciones del servidor, que son ejecutadas cuando el navegador solicita dicha url. Estas últimas acciones permiten incrementar la versatilidad de las páginas web, para poder alcanzar otros usos, aparte de la exhibición de documentos.

## ¿Cómo funcionan los tags audio y video?
Los tags de audio y video se utilizan para insertar contenido en un documento HTML o XHTML. Ambas etiquetas funcionan de la misma manera pero una con relacion a archivos de audio y la otra a archivos de video. El contenido permitido es transparente, que contiene un atributo src (uno o mas elementos &lt;source>) seguido por contenido dinámico o estático.
<ul>
El tag &lt; audio> posee varios atributos:
   <li>Src: su valor es una Dirección URL, nos dice que audio se va a reproducir.
&lt;audio src="mi-audio.mp3">&lt;/audio></li>

  <li>Preload: sirve para precargar tus archivos de audio, no es booleano y tiene tres valores: media, auto y none. La precarga se utiliza de manera correcta si se tienen uno o dos archivos, pero si se tienen muchos va a ralentizar mucho la carga de la página.
&lt;audio src="mi-audio.mp3" preload="none">&lt;/audio></li>

En el ejemplo el preload en “None” nos indica que no deseo que el audio se precargue.
  <li>Autoplay: es un atributo booleano que no necesita tener un valor asociado. Este atributo reproduce automáticamente el archivo. 
&lt;audio autoplay src="mi-audio.mp3">&lt;/audio></li>

  <li>Loop: nos permite indicar si queremos reproducir el archivo en bucle. Vuelve a iniciar el audio cuando finaliza la reproducción. 
&lt;audio autoplay src="mi-audio.mp3" loop >&lt;/audio></li>

  <li>Controls: es un atributo booleano que dispone de un panel de control nativo de cada navegador para, obviamente, controlar la reproducción.</li>
</ul>

Tag &lt;video> atributos:
<ul>
 <li>Controls: agrega controles de video, como reproducción, pausa y volumen.</li>
 <li>Src: El elemento <source> le permite especificar archivos de video alternativos que el navegador puede elegir. El navegador usará el primer formato reconocido.</li>
 <li>Autoplay: Para iniciar un video automáticamente.</li>
 Es una buena idea incluir siempre atributos de ancho y alto. Si no se configuran alto y ancho, la página puede parpadear mientras se carga el video.
</ul>
  
## ¿Qué es el Rendering Engine de un Browser? ¿Cuál es el que utiliza cada uno de los 5 browsers más conocidos (Chrome, Firefox, Safari, IE-Edge, Opera)? ¿Cuál es la importancia de conocer cada uno de ellos en la construcción de un sitio?

El Rendering Engine de un Browser es el responsable de “renderizar”, es decir de mostrar el contenido solicitado en la pantalla del navegador. Por ejemplo, si el contenido solicitado es HTML, será el responsable de analizar el código HTML y CSS y de mostrar el contenido analizado en la pantalla.

Los Browsers más conocidos como Firefox, Chrome y Safari están basados en dos motores de renderización. Firefox utiliza Gecko, un motor de renderización propio de Mozilla. Tanto Safari como Chrome y Opera utilizan WebKit. En el caso de Internet Explorer utiliza Trident. 
La importancia de conocer cada uno de ellos está dada por el análisis del documento HTML que realiza para poder mostrarnos en pantalla su contenido, si no, no podríamos observar nuestro sitio; dicho motor realiza el siguiente flujo básico:

![](https://2.bp.blogspot.com/-sYd9VsZVp3A/V8OrSo1w3LI/AAAAAAAACq0/dz6AAsOo_D8pGykDzQ1bDkVd65Tuchs6QCEw/s1600/4.jpg)
