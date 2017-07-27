# laravel-channel_subscribers
Пакет для отметки пользователей, подписавшихся на каналы


Установка 


    composer require otpixto/laravel-channels_subscribers @dev



Далее откройте config/app.php и добавтье Otpixto\ChannelsSubscribers\ChannelsSubscribersServiceProvider::class в список провайдеров.

Для данного пакета используется Twig - для его утановки можете использовать https://github.com/rcrowe/TwigBridge


Затем нужно произвести миграции таблиц БД

    php artisan migrate --path=vendor/otpixto/laravel-channels_subscribers/src/migrations
    

Убедитесь, что таблица users создана в вашей БД. Создать ее можно командой 

    php artisan migrate
    
Добавить функционал авторизации можно командой

    php artisan make:auth
   

Добавить новых пользователей в таблицу users можно через путь {ваш_домен}/register
 
 
 
Использование

Перейдите по адресу {ваш_домен}/subscribers . Здесь Вы найдете список зарегистрировавшихся пользователей. Нажав Добавить канал, можете добавлять новые каналы, нажав на пользователя, можете отмечать, на какие каналы он подписан
