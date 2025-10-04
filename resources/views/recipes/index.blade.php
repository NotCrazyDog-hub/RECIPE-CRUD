<h1>Lista de receitas</h1>

<ul>
    @foreach ($recipes as $recipe)
        <li>
            {{ $recipe->id }} - {{ $recipe->food_name }}
        </li>
    @endforeach
</ul>