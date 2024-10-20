<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
});

Route::get('/invitation/{guestName}', [GuestController::class, 'showInvitation'])->name('invitation.guest');
Route::post('/invitation/{guestName}', [GuestController::class, 'comment'])->name('comment.guest');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::prefix('dashboard-comment')->group(function () {
        Route::get('/', [AdminController::class, 'viewComment'])->name('comment');
    });
    Route::prefix('dashboard-guest')->group(function () {
        Route::get('/', [AdminController::class, 'viewGuest'])->name('guest');
        Route::post('/post', [AdminController::class, 'createGuest'])->name('create.guest');
        Route::put('/update/{guestId}', [AdminController::class, 'editGuest'])->name('edit.guest');
        Route::delete('/destroy/{guestId}', [AdminController::class, 'destroyGuest'])->name('delete.guest');
        Route::post('/send/{guest}', [AdminController::class, 'sendInvitation'])->name('invitations.send');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
