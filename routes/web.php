<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

Route::get('api/link', [App\Http\Controllers\Link::class, 'index']);
Route::get('api/waktu', [App\Http\Controllers\Waktu::class, 'index']);
