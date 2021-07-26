<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Token Autorizador de VSCode a GitHub
vscode://vscode.github-authentication/did-authenticate?windowid=1&code=1d48632f8518fd5aedc4&state=6998cba3-d2bd-43d4-ad50-ac1b6e05f74d
Miércoles, agosto 19/2020 10:30 horas

Se crea proyecto con "composer", en la última versión de Laravel y en el directorio "asomag".  Esta aplicación reemplará a la desarrollada en PB 12.5 y la BD en SQL Anywhere 12.0.  Sirve para controlar lso descuentos que se realiza a las miembras de la Asociación Femenina del MAG.

Se genera la autenticación de Laravel desarrollada en Bootstrap "ui - auth"

Se crea los módulos de Node.js

Se crean las migraciones de las siguientes tablas:
Categorias, Cliente, Clientes_tipos, Colors, Estados, Facturas, Id_tipos, Marcas, Nivels, Paises

Tratando de guardar la mayoro fidelidad con la BD original desarrollada en SQL Anywhere 12.0

Viernes, agosto 21/2020 09:30 horas
Se crea las migraciones para las siguientes tablas:
Actividades, Cantones, Ciudades, Provincias, Profesiones, Seguimientos, Configuraciones. Items, Import_cabeceras, Import_detalles, Pagos, Roles, Periodos, Temp_roles, Recibos.

Domingo, agosto 23/2020 09:30 horas
Se crea la aplicación en base a otra ya desarrollada donde se intenta tener todos los dispositivos accesibles a esta.

Lunes, septiembre 7/2020 08:00 horas
Hemos personalizado de mejor manera la aplicación para que pueda ser accesible desde varios dispositivos móbiles, se crea un menú a la izquierda, pudiendo ser llevado a cualquier lado de la pantalla.

Los crud para cada tabla ya están mejor elaborados.

La base de datos está alojada en una máquina virtual de windows 7, con el servidor de MariaDB, versión 10.4.10

Hay problemas con el tabla de paises, no funciona el show.blade.php, hay que revisar

Estamos en la etapa de creación de configuraciones, hay que preparar las reglas del negocio.

Lunes, septiembre 21/2020 21:45 horas
Se ha finalizado con las migraciones de las tablas, en su mayoría, está pendiente valorar las tablas para las nuevas regla del negocio que cambian por las facilidades que presenta Laravel, en este día se ha probado la subida a las tablas del servidor de MariaDB, desde un archivo de Excel, exitosamente.

Un punto a recalcar es que se presento un error de: "Nombre de archivo vacío", al importar los archivos, esto se presenta cuando el almacenamiento de los archivos temporales están dirigidos al "Windows/temp", que es la dirección por defecto, esta configuración se modifica en el archivo "php.ini", en la sección "upload_tmp_dir", bajo la etiqueta "[WebPIChanges]", el valor puede ser: "C:\Users\Randy\AppData\Local\Temp", o cualquier otro directorio que el usuario que este logeado a Windows, tenga acceso de lectura y escritura.

Para la importación de archivos de Excel, se usa la dependencia de: "Maatwebsite\Excel", que se puede instalar desde composer.

Martes, septiembre 22/2020 08:55 horas
Implementado el login, logout y register en el menu principal

Martes, julio 13/2021
Para las pruebas se está usando el servidor de MariaDB, que está en la protátil Lt-Randy, y aquí está el db_connect a esa base
DB_CONNECTION=mysql
DB_HOST=192.168.200.22
DB_PORT=3306
DB_DATABASE=asofemag
DB_USERNAME=asomag
DB_PASSWORD=Naty2018**

Vamos a usar el sitio de HelioHost para probar con Naty el sitio, el db_connect es el siguiente:
DB_CONNECTION=mysql
DB_HOST=65.19.141.67
DB_PORT=3306
DB_DATABASE=randyagc_asomag
DB_USERNAME=randyagc_asomag
DB_PASSWORD=Naty2018**
