# Trabajo práctico N° 2
## Tecnologías del lado del servidor (php)

**Objetivo:** entender cómo un formulario HTML se traduce en una petición HTTP y cómo la misma
es procesada por una aplicación.

### Formularios y Validación en ambos extremos

Por un lado, **validaremos del lado del cliente** para evitar que peticiones con datos inválidos alcancen el servidor, consumiendo tiempo de procesamiento de este último. Además, por razones de usabilidad al completar un formulario.

Por el otro, tendremos que **validar del lado del servidor** para evitar el registro de datos que violen la lógica de negocio, aún cuando logran traspasar los controles impuestos en el front-end. Por ejemplo, si en vez de utilizar el formulario ofrecido el cliente enviara una petición HTTP de otra manera, por ejemplo, con herramientas como Postman o similares. 


### Formularios y métodos HTTP

Al definir un formulario, podemos utilizar el atributo *method* para indicar qué método HTTP queremos que utilice el cliente para enviar los datos al servidor. 

- Al utilizar el método POST, los datos de la petición viajan en el cuerpo del mensaje HTTP.
- En cambio, si optáramos por un GET estos datos viajarían en el encabezado del mensaje, en forma de parámetros.

Como consecuencia, al utilizar GET los datos son visibles en la URL, disminuyendo la seguridad. Por lo tanto, no debería ser utilizado para el envío de información sensible como contraseñas. En cambio, permite ciertas ventajas a la hora de **guardar la información obtenida como respuesta a la petición**, por ejemplo, añadirla a "favoritos" en el navegador, o cachearla.

Las ventajas de POST se evidencian cuando se prefiere el resultado opuesto: **no dejar registro de los parámetros de la petición en el navegador**, imposibilidad de cachear tal resultado o envío de información sensible, sin mostrarla en la URL.