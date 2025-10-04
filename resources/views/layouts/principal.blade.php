<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Receitas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body>
    <header>
        <h1>Gerenciador de Receitas</h1>
        <nav>
            <a href="{{ route('recipes.index') }}">Início</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Lista de Receitas. Todos os direitos reservados.</p>
    </footer>
</body>
</html>