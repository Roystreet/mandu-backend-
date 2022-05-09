## Challenge Mandu

Backend realizado para challenge de mandu donde se realizo una apirest relacionada con las areas de trabajo dentro de una organizacion.

## Rutas o Endpoints

Todos los endpoints tiene al inicio la palabra api

Ejemplo /api

    -Get /divisions

Obtenemos un listado de todas las divisiones

    -Get /divisions/{id}

Obtenemos una division por su id

    -Get /division-subdivisions/{id}

Obtenemos todas las subdivisiones de una division concreta

    -Post /divisions

Creamos una nueva division

    -Put /divisions/{id}

Actualiza una division existente

    -Delete/divisions/{id}

Elimina una actualizacion existente

##Test

Para probar la api necesitas instalar las dependencias via composer con el comando

    composer install

una vez realizado ejecutar el comando

    php artisan migrate:seed

para realizar las migraciones y los seeders para llenar nuestra base de datos,
por ultimo ejecutar el comando

    php artisan serve

para levantar nuestra aplicacion, y listo tenemos nuestra aplicacion funcionando Gracias por llegar aqui!
