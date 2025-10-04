<h1>Adicionar uma receita</h1>
<form action="{{ route('recipes.store') }}" method="post">
    @csrf
    <input type="text" name="food_name" placeholder="Insira o nome da comida">
    <br>
    <textarea name="ingredients" placeholder="Insira os ingredientes"></textarea>
    <br>
    <textarea name="instructions" placeholder="Insira o passo a passo"></textarea>
    <br>
    <input type="number" name="prep_time" placeholder="Insira o tempo de preparo (em minutos)">
    <br>
    <input type="submit" value="Adicionar receita">
</form>