<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Routing\Router;

/**
 * @todo tweak this route to exclude development routes.
 */
Route::get('/', function (Router $router) {
    return collect($router->getRoutes()->getRoutesByMethod()['GET'])->map(function ($value, $key) {
        return url($key);
    })->values();
});

Route::get('/version', '\App\Http\Controllers\ApplicationVersionController');

//Route::group(['prefix' => 'mailgun', 'middleware' => ['mailgun.webhook']], function () {
Route::post('/mailgun/widgets', 'MailgunWidgetsController@store')->name('mailgun.store');
//})

Route::post('/parse/email', '\App\Http\Controllers\EmailParserController');

Route::post('/stripe/webhook', '\Laravel\Cashier\Http\Controllers\WebhookController@handleWebhook');

Route::middleware('auth:api')->get('/user', 'API\UserController@user');

Route::middleware('apilogger')->post('/test',function(){
    return response()->json(['status' => 'success']);
});

Route::fallback(function () {
    return response()->json(['message' => 'Not Found.'], 404);
})->name('api.fallback.404');
