<?php

use App\Events\TestEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::view('/soket/{id}', 'soket');
Route::get('/event', function () {
    event(new TestEvent('Hey how are you?', 1));
    return 'Fired an event';
});
Route::post('/send', function (Request $request) {
    event(new TestEvent($request->message, $request->id));
    return 'Event sent';
});
