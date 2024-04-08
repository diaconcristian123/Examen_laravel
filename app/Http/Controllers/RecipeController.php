<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = RecipeController::all();
        return view('recipes.index', compact('recipes'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        Recipe::create($request->all());

        return redirect()->route('recipes.index')
                        ->with('success','Recipe created successfully.');
    }

    public function show(RecipeController $recipe)
    {
        return view('recipes.show',compact('recipe'));
    }

    public function edit(RecipeController $recipe)
    {
        return view('recipes.edit',compact('recipe'));
    }

    public function update(Request $request, RecipeController $recipe)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        $recipe->update($request->all());

        return redirect()->route('recipes.index')
                        ->with('success','Recipe updated successfully');
    }

    public function destroy(RecipeController $recipe)
    {
        $recipe->delete();

        return redirect()->route('recipes.index')
                        ->with('success','Recipe deleted successfully');
    }
}
