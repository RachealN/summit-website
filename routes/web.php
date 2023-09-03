<?php

use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
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
    return view('site.pages.home');
})->name('home');

Route::get('/about', function () {
    return view('site.pages.about');
})->name('about');

Route::get('/speakers', function () {
    return view('site.pages.speakers');
})->name('speakers');

Route::get('/events', function () {
    return view('site.pages.events');
})->name('events');

Route::get('/gallery', function () {
    return view('site.pages.gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('site.pages.contact');
})->name('contact');

Route::get('/register', function () {
    return view('site.pages.register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/personal', [TicketController::class, 'personal'])
    ->name('ticket.personal');

Route::get('/family', [TicketController::class, 'family'])
    ->name('ticket.family');

Route::get('/group', [TicketController::class, 'group'])
    ->name('ticket.group');

Route::post('/pay', [FlutterwaveController::class, 'initialize'])
    ->name('pay');

Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])
    ->name('callback');
