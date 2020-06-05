# Proyecto MVC

Un proyecto derivado del tutorial introductorio de Laracast y con algunos
agregados para ser utilizado como material de PAW - UNLu.

## Instalación

 - Clonar el repositorio
 - Crear un schema de base de datos con algun cliente MySQL
 - Ejecutar los migrations del directorio `sql/` en orden
 - Crear un archivo `config.php` (Hay un ejemplo para copiar en `config.php.example`)
  - Configurar la base de datos creada y los usuarios correspondientes
 - Ejecutar `composer install`

### Aclaración

Por cada objeto creado por usted mismo (Model o Controller), debera indicar a
composer que regenere el autoload:

```
composer dumpautoload
```

Si lo que se desea es agregar una nueva libreria de 3ero

```
composer requiere name/lib:version
```

## Deploy / ejecución

### Local

Ejecutar:

```
git clone https://github.com/tomasdelvechio/The-PHP-Practitioner-Full-Source-Code.git paw-mvc/
cd paw-mvc/
# Aca irian los pasos de instalación
php -S localhost:8888
```

Luego ingresar a http://localhost:8888

---

## Respuestas

Breve sección dedicada a responder las consignas de la guía recibida.

### En ejercicio 1, ¿Qué cambios hubo que realizar para la generación del id?

En versiones anteriores, la generación del id era manual, y quedaba a cargo de un controlador que accedía al último turno almacenado, obtenía su id, y generaba uno nuevo consecutivo. Al delegar esta tarea a la base de datos, el controlador no tiene necesidad de "enterarse" el identificador del turno, sino que el motor de base de datos se encarga de generarlo y asignarlo al nuevo registro, simpre y cuando hayamos especificado la columna correspondiente con el atributo AUTO_INCREMENT.


### En ejercicio 4, ¿Considera esto util? ¿En que casos puede llegar a utilizarse?

Contar con un log donde quede registro de las operaciones realizadas por el usuario, tiene como ventaja principal la posibilidad de verificar en qué momento se llevó a cabo cada acción. Con fines de control, es un aspecto más en que nuestra aplicación contribuye. Además, podemos respaldar los valores que registramos en nuestra base de datos, a través de la posibilidad de especificar qué operaciones realizó el usuario, y cuándo, para llegar a dichos valores. 

Por otra parte, frente a equivocaciones del usuario, al estar dejando registro también, en este caso particular, de los datos del turno, podríamos realizar restauraciones a estados previos sin pérdida de información. 

