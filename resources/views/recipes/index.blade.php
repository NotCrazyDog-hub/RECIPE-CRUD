<h1>Lista de receitas</h1>
<a href="{{ route('recipes.create') }}">+ Adicionar uma receita</a>
<ul>
    @foreach ($recipes as $recipe)
        <li>
            {{ $recipe->id }} - {{ $recipe->food_name }}
        </li>
    @endforeach
</ul>