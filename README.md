
# Sistema E-commerce para tienda deportiva

A continuación se presenta una guía para el proyecto de desarrollo de un portal web para una cadena de tiendas de ropa deportiva. El sistema permite administrar a profundidad el inventario de todas las tiendas y sucursales registradas, asi como administrar los empleados y usuarios.

A continuación se presenta los requisitos y pasos de instalación para ejecutar el proyecto.

## Requisitos

 - Xampp: 8.5.12
 - PHP: 8.5.12 (Implementado en Xampp)
 - MySQL: 5.2.3 (Implementado en Xampp)
 - MariaDB-Server: 10.11.16 (Implementado en Xampp)
 - Composer: 2.11.1

## Instrucciones

Enlace de descarga de Xampp:

 > https://www.apachefriends.org/download.html

Dsecargar y ejecutar el instalador de composer:

 > https://getcomposer.org/Composer-Setup.exe

Si se utiliza Xampp, Windows no reconocerá la carpeta PHP dentro de Xampp, por tanto no será posible utilizar comandos PHP en la terminal.

Primero se debe agregar la ruta de la carpeta PHP dentro de Xampp a las variables de entorno. En PowerShell escribir el siguiente comando:

 > [Environment]::SetEnvironmentVariable("Path", $env:Path + ";C:\xampp\php", "User")

Una vez agregada la ruta de PHP a las varibles de entorno, descargue el repositorio del proyecto y encienda los modulos de Apache y MySQL en Xampp.

Copiar la plantilla de configuración de ambiente de .env.example a un nuevo archivo .env .

Una vez se terminen las configuraciones correspondientes, abrir una terminal en la carpeta del proyecto. Ingresar el siguiente comando para crear la base de datos y realizar las migraciones:

> php artisan migrate

Ingresar YES para permitir que Laravel cree la base de datos.

>  WARN  The database 'tienda_de_ropa_deportiva' does not exist on the 'mysql' connection.  
> Would you like to create it? (yes/no) [yes]

Una vez creada la base de datos y realizadas las migraciones, se debe levantar el servidor mediante el siguiente comando:

> php artisan serve

Por último, ingresar mediante el navegador a **http://127.0.0.1:8000**.