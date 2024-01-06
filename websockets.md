```sh
composer require beyondcode/laravel-websockets -W
```

```sh
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="migrations"
```

```sh
php artisan migrate
```

```sh
php artisan vendor:publish --provider="BeyondCode\LaravelWebSockets\WebSocketsServiceProvider" --tag="config"
```

```sh
composer require pusher/pusher-php-server
```

```sh
BROADCAST_DRIVER=pusher
```
```sh
npm install --save-dev laravel-echo pusher-js
```
```sh
php artisan websockets:serve
```
- Make Event

```sh
php artisan make:event TestEvent
```
- Listen / Fire Event
    - Fire event using route for dispatch


[More Details](https://www.youtube.com/watch?v=Hq0ikVcvXJQ)

