<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Pages\Movements\index as MovementsIndex;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/movements', MovementsIndex::class)->name('movements.index');

