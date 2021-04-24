

## Proyecto Veterinaria Los michis

Proyecto hecho para satisfacer la prueba tecnica.

## Especificaciones
- Larevel en su versión 8.x con Jetstream y LiveWire
- MYSQL como base de datos.
- Plantilla Admin LTE 3

## Instrucciones
- Paso 1: Clona o descarga el proyecto.
- Paso 3: Entra a la raiz del proyecto.
- Paso 3: Instala las dependencias con "composer install"
- Paso 4: Instalala dependencias de NPM con "npm install"
- Paso 5: Crea un archivo .env con "copy .env.example .env".
- Paso 6: En MYSQL creo una base de datos con el nombre "veterinaria".
- Paso 7: En el archivo .env que creaste ingresa el nombre de la base de datos y tus credenciales.
- Paso 8: Genera una llave para tu proyecto con "php artisan key:generate".
- Paso 9: Realiza las migraciones con los seeders con "php artisan migrate --seed"
- Paso 10: Ejecuta el proyecto con "php artisan serve".

El Diagrama de la base de datos se encuentra dentro de la carpeta public/db

Desarrollado por [Enrique Martinez Rairez](https://quiquem.github.io/portafolio/)
