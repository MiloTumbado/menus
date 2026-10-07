# menus

Actividad 11. Tres vistas Blade con contenido diferente, rutas y controlador; menú activo mediante request()->routeIs y footer compartido.

Aplicaciones web · Módulo 3 · Emilio Garza Vargas.

## Ejecutar

Requiere PHP 7.4, Composer y extensiones SQLite. Laravel 7 se conserva por la consigna académica; ejecutar en desarrollo local.

```sh
composer install
cp .env.example .env
php -r "touch('database/database.sqlite');"
# Configurar DB_DATABASE con la ruta absoluta del archivo SQLite en .env
php artisan key:generate
php artisan migrate --seed
php artisan serve --host=127.0.0.1 --port=8911
```

No se incluyen vendor, .env ni la base privada. Las migraciones y los seeders reconstruyen los datos de ejemplo.
