<?php

use App\Http\Controllers\NotificationController;
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
// Route::get('test', function () {
//     event(new App\Events\StatusLiked("Syahrizal"));
//     return "Event has been sent!";

// });

// Notification
Route::get('notification', [NotificationController::class, 'index']);
