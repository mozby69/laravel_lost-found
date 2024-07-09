<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\FoundPage;


Route::get('/', function () {
    return view('livewire.homepage');
})->name('livewire.homepage');



Route::get('/foundpage', FoundPage::class)->name('foundpage');

