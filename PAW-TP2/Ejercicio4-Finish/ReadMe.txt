Para poder evitar colisiones hemos creadoun hash utilizando en algoritmo "SHA256" sobre determinados los parametos:

* Tamaño de la imagen;
* El nombre de la imagen;
* El tiempo actual en que estamos subiendo la imagen

Con todo eso se genero un codigo hash que sera almacenado en un directorio que hemos craado. Para ello utilizamos el nombre
de cada usuario, haciendo referencia que ese nombre de "Usuario" es el nombre del que solicita un turno.
De esta forma, con esta funcion hash nos evitamos que dos usuarios distintos suban imagenes con el mismo nombre y así no tener
inconvenientes de colisiones, y además así tener nuestro servidor mas ordenado.