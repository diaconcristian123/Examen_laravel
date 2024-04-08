@extends('layouts.app')

@section('content')
    <h1>Edit Recipe</h1>

    <form method="POST" action="{{ route('recipes.update', ['recipe' => $recipe->id]) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titlu</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $recipe->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descriere</label>
            <textarea name="description" id="description" class="form-control" required>{{ $recipe->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="ingredients">Ingrediente</label>
            <textarea name="ingredients" id="ingredients" class="form-control" required>{{ $recipe->ingredients }}</textarea>
        </div>

        <div class="form-group">
            <label for="instructions">Instructiuni</label>
            <textarea name="instructions" id="instructions" class="form-control" required>{{ $recipe->instructions }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Recipe</button>
    </form>
@endsection