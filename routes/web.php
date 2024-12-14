<?php

use Illuminate\Support\Facades\Route;

/* Página Principal */
Route::get('/', function () {
    return view('index');
});

// Blog
Route::get('/blog', function () {
    return view('project.blog.blog');
});

// Blog
Route::get('/contato', function () {
    return view('project.contato.contact');
});
