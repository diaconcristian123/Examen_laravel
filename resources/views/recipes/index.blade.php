@extends('layouts.app')

@section('content')
    <h1>Recipes</h1>

    <a href="{{ route('recipes.create') }}" class="btn btn-primary">Create Recipe</a>

    <ul>
        @foreach($recipes as $recipe)
            <li>
                <a href="{{ route('recipes.edit', ['recipe' => $recipe->id]) }}">{{ $recipe->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection