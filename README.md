
# VIMEO - TASKS

Requisitos:

- Tener instalado apache, php7, composer
- Instalar las dependencias: 
```
$ npm install
```
- Hay que crear una BBDD "vimeo"
```php
mysql -u root -p
create database vimeo;
```
- Crear la tabla a la BBDD:
```
$ php artisan migrate
```
- Añadir datos de ejemplo en la BBDD:
```
$ php artisan make:seeder TasksTableSeeder
```
- Ejecutar el servidor:
```
php artisan serve
```
- Compilar el proyecto front:
```
npm run dev
```
