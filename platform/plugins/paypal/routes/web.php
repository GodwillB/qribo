<?php

Route::group(['namespace' => 'Botble\Paypal\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    Route::get('payment/paypal/status', 'PayPalController@getCallback')->name('payments.paypal.status');
});
