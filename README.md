<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Descripción

Es la creación de un API para aprende la funcionalida del Framework

se utilizo los siguinetes comandos:

#### Crear la aplicación:

``` shell
composer create-project laravel/laravel:^8.0 api
```
#### Crear la migracion, modelo y controlador:

```
php artisan make:model la '_name_' -mcr 
```

#### Creacion de solo la migracion:

```
php artisan make:migration '_name_'
```

#### Hacer la migracion a la BD

```
php artisan migrate
```

## Heramineta que se utilizo

Se utilizo POSTMAN para la pruebas de Json 


<a style="font-size: 20px;diesplay: inline-block; padding: 10px 20px; background-color: #e05320; color: #fff; text-decoration: none; border: none; border-radius: 5px;" href="https://www.postman.com/downloads">Postman</a>

Tmabien se utilizo TABLE PLUS para visualizacion de BD:

<a style="font-size: 20px;diesplay: inline-block; padding: 10px 20px; background-color: #F27325; color: #fff; text-decoration: none; border: none; border-radius: 5px;" href="https://tableplus.com/download">Table Plus</a>


---

#### Para levanatar el servidor local:

```
php artisan server
```