<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// ─── Auth (public) ────────────────────────────────────────────────────────────

Route::get('/login',  [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register',  [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register.post');

// ─── Protected routes (cần đăng nhập) ────────────────────────────────────────

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('content.dashboard');
    })->name('dashboard');

    // Tasks
    Route::get('/tasks', function () {
        return view('content.task_list');
    })->name('tasks.index');

    Route::get('/tasks/create', function () {
        return view('content.create_task');
    })->name('tasks.create');

    Route::get('/tasks/{id}', function ($id) {
        return view('content.task_detail', ['id' => $id]);
    })->name('tasks.show');

    Route::get('/tasks/{id}/edit', function ($id) {
        return view('content.edit_task', ['id' => $id]);
    })->name('tasks.edit');

    // Profile
    Route::get('/profile', function () {
        return view('content.user_profile');
    })->name('profile');
});
