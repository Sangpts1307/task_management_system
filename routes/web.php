<?php

use Illuminate\Support\Facades\Route;

// Auth
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/logout', function () {
    return view('auth.login');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('content.dashboard');
});

// Tasks
Route::get('/tasks', function () {
    return view('content.task_list');
});
Route::get('/tasks/create', function () {
    return view('content.create_task');
});
Route::get('/tasks/{id}', function ($id) {
    return view('content.task_detail', ['id' => $id]);
});
Route::get('/tasks/{id}/edit', function ($id) {
    return view('content.edit_task', ['id' => $id]);
});

// Profile
Route::get('/profile', function () {
    return view('content.user_profile');
});
