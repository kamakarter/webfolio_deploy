<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


### PAGES ###
// Главная страница
Route::get('/', [Controller::class, 'showHomePage'])->name('show.home');

// Страница поддержки
Route::get('/help', [Controller::class, 'showHelpPage'])->name('show.help');

// Политика с обработкой персональных данных
Route::get('/policy', [Controller::class, 'showPolicyPage'])->name('show.policy');

// Страница с ошибкой 404
Route::get('/error/404', [Controller::class, 'showError404'])->name('show.error.404');

// Страница с сообщением: у вас нет прав администратора
Route::get('/error/not_admin', [Controller::class, 'showNotAdminPage'])->name('show.error.not.admin');







### USER ###

// Authentication Routes
Route::get('/signup', [Controller::class, 'showSignUp'])->name('show.signup');
Route::post('/register', [UserController::class, 'register'])->name('register');

// Sign In (Вход)
Route::get('/signin', [Controller::class, 'showSignIn'])->name('show.signin');
Route::post('/login', [UserController::class, 'login'])->name('login');

// signOut (Выход из аккаунта)
Route::post('/logout', [UserController::class, 'logout'])->name('logout');




Route::middleware('auth')->group(function () {
    Route::get('/account', [Controller::class, 'showAccount'])->name('show.account');
    Route::get('/user/edit-data/{id}', [UserController::class, 'showEditUserData'])->name('show.edit.user.data');
    Route::put('/user/edit-data/{id}', [UserController::class, 'editUserData'])->name('edit.user.data');
});

// Просмотр аккаунта (публичный)
Route::get('/user/{id}', [Controller::class, 'showUserAccount'])->name('show.user.account');
