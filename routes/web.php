<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;


route::get('/',[pagecontroller::class,'home'])->name('home');
Route::get('/menu',[Pagecontroller::class,'menu'])->name('menu');
Route::get('/reservations',[Pagecontroller::class,'reservations'])->name('reservations');
Route::get('/offers',[Pagecontroller::class,'offers'])->name('offers');
Route::get('/about',[Pagecontroller::class,'about'])->name('about');
Route::get('/contact',[Pagecontroller::class,'contact'])->name('contact');
Route::get('/account',[Pagecontroller::class,'account'])->name('account');
Route::get('/details',[Pagecontroller::class,'details'])->name('details');






