<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WratsUserApplicationHistoryController;
use App\Http\Controllers\UserSettingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Livewire\Views\MyHistory;


Route::get('/', function () {
    return view('auth.login');
})->name('home');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adjudications', function(){
    return view('adjudications');
})->name('adjudications');

Route::get('/reports', function(){
    return view('reports');
})->name('reports');

Route::get('/records', function(){
    return view('records');
})->name('records');


Route::get('/knowledge-base', function(){
    return view('knowledge-base');
})->name('knowledge-base');

Route::get('/support', function(){
    return view('support');
})->name('support');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';

Route::resource('wrats-user-application-histories', App\Http\Controllers\WratsUserApplicationHistoryController::class);

Route::get('/my-history', [WratsUserApplicationHistoryController::class, 'show'])->name('my-history');

Route::get('/account-settings', [UserSettingController::class, 'show'])->name('account-settings');

