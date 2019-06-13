<?php

Route::view('/cart', 'cart.beta');
Route::view('/cart-main', 'cart.main');

Route::resource('/chat', 'ChatController')->only([
    'index',
    'store',
    'show',
]);

Route::view('/inbox', 'messages.inbox');

Route::view('/support', 'tickets.support-ticket', [
    'statuses' => ['Open', 'Closed', 'On Hold'],
]);
