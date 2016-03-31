<?php

/*************************************************************************
*Your routes related to contact package
*************************************************************************/


Route::group(['namespace' => 'Abhijeet\Contact\Controllers', 'prefix'=>'contactus', 'middleware' => 'web'], function() {
    // Your route goes here
    Route::get('/contact', 'ContactController@showContactForm');
    Route::post('/contact', 'ContactController@saveContactForm');
});