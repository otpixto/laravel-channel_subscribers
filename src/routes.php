<?php
Route::get('/subscribers', 'Otpixto\ChannelsSubscribers\ChannelsSubscribersController@index');
Route::get('/subscribers/edit/{user_id}', 'Otpixto\ChannelsSubscribers\ChannelsSubscribersController@edit');
Route::post('/subscribers/update/{user_id}', 'Otpixto\ChannelsSubscribers\ChannelsSubscribersController@update');
Route::get('/subscribers/add_channel', 'Otpixto\ChannelsSubscribers\ChannelsSubscribersController@addChannel');
Route::post('/subscribers/insert_channel', 'Otpixto\ChannelsSubscribers\ChannelsSubscribersController@insertChannel');
