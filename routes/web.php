<?php

use App\Notifications\SendMessage;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    Notification::send(null,new SendMessage(null));
    return view('welcome');
});

