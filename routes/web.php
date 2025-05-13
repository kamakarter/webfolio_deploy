<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ExperienceController;
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



    
    // Просмотр аккаунта
    Route::get('/account', [Controller::class, 'showAccount'])->name('show.account');

    // Редактирование данных пользователя
    Route::get('/user/edit-data/{id}', [UserController::class, 'showEditUserData'])->name('show.edit.user.data');
    Route::put('/user/edit-data/{id}', [UserController::class, 'editUserData'])->name('edit.user.data');

    // Добавление и загрузка аватара
    Route::get('/upload-avatar', [UserController::class, 'showUploadUserAvatar'])->name('show.upload.user.avatar');
    Route::put('/upload-avatar/{id}', [UserController::class, 'uploadUserAvatar'])->name('upload.user.avatar');

    // Добавление и загрузка фонового изображения
    Route::get('/add-background', [UserController::class, 'addUserBackground'])->name('show.add.user.background');
    Route::put('/upload-background/{id}', [UserController::class, 'uploadUserBackground'])->name('upload.user.background');

    // Добавление и загрузка опыта работы
    Route::get('/add-experience', [ExperienceController::class, 'showAddExperience'])->name('show.add.user.experience');
    Route::post('/add-experience/{id}', [ExperienceController::class, 'addExperience'])->name('add.user.experience');

    // Удаление опыта работы
    Route::get('/delete-experience/{id}', [ExperienceController::class, 'showDeleteExperience'])->name('show.delete.user.experience');
    Route::post('/delete-experience/{id}/confirm', [ExperienceController::class, 'deleteExperience'])->name('delete.user.experience');

    // Просмотр аккаунта (публичный)
    Route::get('/user/{id}', [Controller::class, 'showUserAccount'])->name('show.user.account');
