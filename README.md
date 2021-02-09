# SISTEMA DE INFORMACIÓN API REST

## Pasos para poder usar el proyecto

### Paso número uno
#### Tranformar el .env de ejemplo a el .env del proyecto
Para ello nos vamos a la ruta del proyecto y ejecutamos el siguiente comando
```
cp .env.example .env
```
### Paso número dos
#### Instalamos los componentes de composer
Para ello ejecutamos la siguiente linea
```
composer install
```
Si existe el problema que no deja ejecutar el comando, vamos al archivos **composer.json**
y buscamos la siguiente linea y la borramos
```
"ext-http": "*"
```
Despues de ahí ya no hay problemas

###Paso número tres
#### Generamos la llave del proyecto
Ejecutamos la siguiente linea
```
php artisan key:generate
```

### Último paso
#### Migrar la base de datos
Para migrar la base de datos necesitamos crear la base de datos y modificar el .env el cual tiene los datos a la base de datos
que se utilizara y una vez configurada migramos y listo con un paso adicional si tienes semilas que en este caso si las tienes ejecutas los siguientes
comandos

```
php artisan migrate

php artisan db:seed
```
