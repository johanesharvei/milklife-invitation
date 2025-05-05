<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InvitationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/invitation', [InvitationController::class, 'index'])->name('invitation.get');
});

Route::get('/', function () {
    return redirect('/invite');
});

Route::get('/invite', [HomeController::class, 'showSlug']);

Route::get('/invite/{slug}', [HomeController::class, 'showSlug'])
     ->where('slug', '[A-Za-z0-9\-_%&]+');

Route::post('/invite/rsvp', [HomeController::class, 'store']);

require __DIR__.'/auth.php';
