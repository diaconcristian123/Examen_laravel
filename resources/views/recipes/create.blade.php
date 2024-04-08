@extends('layouts.app')

@section('content')
    <h1>Create a Recipe</h1>

    <form method="POST" action="{{ route('recipes.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Titlu</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Descriere</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="ingredients">Ingrediente</label>
            <textarea name="ingredients" id="ingredients" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="instructions">Instructiuni</label>
            <textarea name="instructions" id="instructions" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Recipe</button>
    </form>
@endsection