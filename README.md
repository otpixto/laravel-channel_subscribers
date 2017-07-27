# laravel-channel_subscribers
Пакет для отметки пользователей, подписавшихся на каналы


Установка 


  composer require otpixto/laravel-channels_subscribers @dev



Далее откройте config/app.php и добавтье Otpixto\ChannelsSubscribers\ChannelsSubscribersServiceProvider::class в список провайдеров.

Для данного пакета используется Twig - для его утановки можете использовать https://github.com/rcrowe/TwigBridge


Затем нужно произвести миграции таблиц БД

  php artisan migrate --path=vendor/otpixto/laravel-channels_subscribers/src/migrations
