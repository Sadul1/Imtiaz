<?php

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send');

Route::post('enquiry/SendEnquiry', 'SendEmailController@sendEn');

Route::get('/', function () {
    return view('home');
});

