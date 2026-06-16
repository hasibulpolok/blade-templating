<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('backend/dashboard');
});
Route::get('/students', function () {
    return view('backend.students.index');
});

Route::get('/student/create', function () {
    return view('backend.students.create');
});
