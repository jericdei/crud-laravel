<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => to_route('users.index'));

Route::get('/users', function () {
    return view('index');
})->name('users.index');

Route::get(
    '/users/form',
    fn(Request $request) =>
    view('form', [
        'user' => User::find($request->input('id'))
    ])
)->name('users.form');
