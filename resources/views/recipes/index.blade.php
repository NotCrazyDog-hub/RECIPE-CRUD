<h1>Lista de receitas</h1>
<a href="{{ route('recipes.create') }}">+ Adicionar uma receita</a>
<ul>
    @foreach ($recipes as $recipe)
        <li>
            {{ $recipe->id }} - {{ $recipe->food_name }} | <a href="{{ route('recipes.edit', ['recipe' => $recipe->id]) }}">Editar</a>
        </li>
    @endforeach
</ul>