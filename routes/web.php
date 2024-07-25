<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Livewire\Volt\Volt::route('counter', 'counter');
