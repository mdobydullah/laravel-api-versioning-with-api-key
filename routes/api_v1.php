<?php

Route::group(['middleware' => 'VerifyAPIKey'], function () {
    Route::get('welcome', 'API\v1\WelcomeController@index');
});
