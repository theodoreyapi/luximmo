<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('about', function () {
    return view('about');
});
Route::get('services', function () {
    return view('services.service');
});
Route::get('blog', function () {
    return view('blogs.blog');
});
Route::get('contact', function () {
    return view('contact');
});
