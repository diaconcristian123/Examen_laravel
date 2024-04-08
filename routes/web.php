<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recipe;
use App\Http\Controllers\RecipeController;

Route::get('/', function () {
    return view('recipes.index', ['recipes' => Recipe::all()]);
})->name('recipes.index');

Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('/recipes', [RecipeController::class, 'store'])->name('recipes.store');

Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipes.edit');
Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update');

Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])->name('recipes.destroy');