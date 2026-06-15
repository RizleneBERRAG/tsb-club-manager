<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/contact', function () {
    return view('public.contact');
})->name('contact');

Route::get('/planning', function () {
    return redirect('/#planning-tarifs');
})->name('planning');

Route::get('/documents', function () {
    return redirect('/#documents');
})->name('documents');

Route::get('/demande-echange', function () {
    return redirect('/contact');
})->name('request');

Route::get('/espace-club', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
