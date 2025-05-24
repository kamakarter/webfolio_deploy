<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TariffController;
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

// Страница с сообщением: у вас нет прав администратора
Route::get('/error/not_auth', [Controller::class, 'showNotAuthPage'])->name('show.error.not.auth');


 // Authentication Routes
    Route::get('/signup', [Controller::class, 'showSignUp'])->name('show.signup');
    Route::post('/register', [UserController::class, 'register'])->name('register');

    // Sign In (Вход)
    Route::get('/signin', [Controller::class, 'showSignIn'])->name('show.signin');
    Route::post('/login', [UserController::class, 'login'])->name('login');

    // Просмотр аккаунта (публичный)
    Route::get('/user/{login}', [Controller::class, 'showUserAccount'])->name('show.user.account');

    




Route::middleware('check.admin')->group(function(){
    // Страница администратора
    Route::get('/admin', [AdminController::class, 'showAdminPanelPage'])->name('show.admin');

    // Блокировка пользователя и разблокировка пользователя
    Route::get('/admin/block-user/{id}', [AdminController::class, 'blockedUser'])->name('block.user');
    Route::get('/admin/unblock-user/{id}', [AdminController::class, 'unblockedUser'])->name('unblock.user');


    // Страница с добавлением тарифа
    Route::get('/admin/add-tariff', [TariffController::class, 'showAddTariffPage'])->name('show.add.tariff');
    Route::post('/admin/add-tariff', [TariffController::class, 'addTariff'])->name('add.tariff');

    // Страница с редактированием тарифа
    Route::get('/admin/edit-tariff/{id}', [TariffController::class, 'showEditTariffPage'])->name('show.edit.tariff');
    Route::put('/admin/edit-tariff/{id}/confirm', [TariffController::class, 'editTariff'])->name('edit.tariff');

    // Страница с удалением тарифа
    Route::get('/admin/delete-tariff/{id}', [TariffController::class, 'showDeleteTariffPage'])->name('show.delete.tariff');
    Route::delete('/admin/delete-tariff/{id}/confirm', [TariffController::class, 'deleteTariff'])->name('delete.tariff');


});

Route::middleware('check.auth')->group(function(){
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



    // Добавление опыта работы
    Route::get('/add-experience', [ExperienceController::class, 'showAddExperience'])->name('show.add.user.experience');
    Route::post('/add-experience/{id}', [ExperienceController::class, 'addExperience'])->name('add.user.experience');

    // Редактирование опыта работы
    Route::get('/edit-experience/{id}', [ExperienceController::class, 'showEditExperience'])->name('show.edit.user.experience');
    Route::put('/edit-experience/{id}/confirm', [ExperienceController::class, 'editExperience'])->name('edit.user.experience');

    // Удаление опытаяработы
    Route::get('/delete-experience/{id}', [ExperienceController::class, 'showDeleteExperience'])->name('show.delete.user.experience');
    Route::delete('/delete-experience/{id}/confirm', [ExperienceController::class, 'deleteExperience'])->name('delete.user.experience');



    // Добавление проекта
    Route::get('/add-project', [ProjectController::class, 'showAddProject'])->name('show.add.user.project');
    Route::post('/add-project/confirm', [ProjectController::class, 'addProject'])->name('add.user.project');

    // Редактирование проекта
    Route::get('/edit-project/{id}', [ProjectController::class, 'showEditProject'])->name('show.edit.user.project');
    Route::put('/edit-project/{id}/confirm', [ProjectController::class, 'editProject'])->name('edit.user.project');

    // Удаление проекта
    Route::get('/delete-project/{id}', [ProjectController::class, 'showDeleteProject'])->name('show.delete.user.project');
    Route::delete('/delete-project/{id}/confirm', [ProjectController::class, 'deleteProject'])->name('delete.user.project');

    // Страница с тарифами
    Route::get('/tariffs', [TariffController::class, 'showTariffs'])->name('show.tariffs');

    // Страница с оплатой подписки
    Route::get('/payment/tariff/{id}', [SubscriptionController::class, 'showPaymentForm'])->name('show.payment.form');
    Route::post('/payment/tariff/{id}/confirm', [SubscriptionController::class, 'addPayment'])->name('add.payment');
});
