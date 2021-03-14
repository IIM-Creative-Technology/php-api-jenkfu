# INSTALLATION

Move into my folder
```bash
cd IIM-LARAVEL-PRPJECT
```
Install the depencies with composer

``` bash
$composer install
```
## DATABASE CONFIGURATION
Don't forget to edit the .env file with your settings

Run those commandes lines
``` bash
$ php artisan migrate
$ php artisan db:seed
```
Then run the server 

``` bash
$ php artisan serve
```

# LES ROUTES

## GET

You can get all the routes
``` bash
GET http://127.0.0.1:8000/api/[name]
GET http://127.0.0.1:8000/api/[name]/{id}
```

## POST

You can insert in all the routes 
``` bash
POST http://127.0.0.1:8000/api/[name]
```

## PUT

You can update in all the routes 
``` bash
PUT http://127.0.0.1:8000/api/[name]/{id}
```

## DELETE

You can delete in all the routes 
``` bash
PUT http://127.0.0.1:8000/api/[name]/{id}
```

Don't forget to replace {name} by one of the following elements :

* students
* teachers
* classes
* subjects