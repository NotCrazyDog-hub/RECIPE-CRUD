@extends('layouts.formularios')

@section('content')
<h1>Editar uma receita</h1>
<form action="{{ route('recipes.update', ['recipe' => $recipe->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="food_name" placeholder="Insira o nome da comida" value="{{ $recipe->food_name }}">
    <br>
    <textarea name="ingredients" placeholder="Insira os ingredientes">{{ $recipe->ingredients }}</textarea>
    <br>
    <textarea name="instructions" placeholder="Insira o passo a passo">{{ $recipe->instructions }}</textarea>
    <br>
    <input type="number" name="prep_time" placeholder="Insira o tempo de preparo (em minutos)" value="{{ $recipe->prep_time }}">
    <br>
    <input type="submit" value="Atualizar receita">
</form>
@endsection