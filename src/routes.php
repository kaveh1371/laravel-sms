<?php


Route::group(['prefix'=>'amiriun-sms','namespace'=>'\Amiriun\SMS\Http\Controllers'], function () {
    Route::post('kavenegar/receive', 'HookController@receiveKavenegar');
    Route::post('kavenegar/deliver', 'HookController@deliverKavenegar');
});
