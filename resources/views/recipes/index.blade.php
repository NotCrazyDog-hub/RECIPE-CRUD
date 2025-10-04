<h1>Lista de receitas</h1>
<a href="{{ route('recipes.create') }}">+ Adicionar uma receita</a>
<ul>
    @foreach ($recipes as $recipe)
        <li>
            {{ $recipe->id }} - {{ $recipe->food_name }} | <a href="{{ route('recipes.edit', ['recipe' => $recipe->id]) }}">Editar</a> |
            <form action="{{ route('recipes.destroy', ['recipe' => $recipe->id]) }}" method="post">
                @csrft
                @method('DELETE')
                <input type="submit" onclick="return confirm('Tem certeza em deletar esta receita de sua lista?')" value="Deletar">
            </form>
        </li>
    @endforeach
</ul>