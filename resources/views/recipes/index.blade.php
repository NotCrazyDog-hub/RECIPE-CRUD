@extends('layouts.principal')

@section('content')
<h1>Lista de receitas</h1>
<a href="{{ route('recipes.create') }}">+ Adicionar uma receita</a>
<ul class="recipe-list">
    @foreach ($recipes as $recipe)
        <li>
            <span class="recipe-display">
                #{{ $recipe->id }}: {{ $recipe->food_name }}
            </span>
            <div class="recipe-actions">

                <a href="{{ route('recipes.edit', ['recipe' => $recipe->id]) }}">Editar</a>
                <a href="{{ route('recipes.show', ['recipe' => $recipe->id]) }}">Visualizar detalhes</a>
                <form action="{{ route('recipes.destroy', ['recipe' => $recipe->id]) }}" method="post" class="delete-form">
                    @csrf
                    @method('DELETE')
                    <input type="submit" onclick="return confirm('Tem certeza em deletar esta receita de sua lista?')" class="button button-delete" value="Deletar">
                </form>
            </div>
        </li>
    @endforeach
</ul>
@endsection