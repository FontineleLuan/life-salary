<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Pages\Movements\index as MovementsIndex;
use App\Livewire\Pages\Statement\index as StatementIndex;
use App\Livewire\Pages\FixedExpenses\index as FixedExpensesIndex;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/movements', MovementsIndex::class)->name('movements.index');
Route::get('/fixed-expenses', FixedExpensesIndex::class)->name('fixedExpenses.index');
Route::get('/statement', StatementIndex::class)->name('statement.index');

