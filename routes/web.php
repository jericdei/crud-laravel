<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => to_route('users.index'));

Route::get('/users', function () {
    return view('index');
})->name('users.index');

Route::get('/users/{user}/edit', fn(User $user) => view('edit', ['user' => $user]))->name('users.edit');
