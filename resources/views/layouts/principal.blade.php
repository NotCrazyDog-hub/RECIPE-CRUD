<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Receitas - Meu Livro de Receitas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="kitchen-header">
        <div class="container header-content">
            <h1>O Livro de Receitas Digital</h1>
            <nav>
                <a href="{{ route('recipes.index') }}" class="nav-link">Minhas Receitas</a>
            </nav>
        </div>
    </header>

    <main class="kitchen-main">
        <div class="container recipe-container">
            @yield('content')
        </div>
    </main>

    <footer class="kitchen-footer">
        <div class="container">
            <p>&copy; {{ date('Y') }} Cozinha Fácil. Gerencie seus pratos com sabor.</p>
        </div>
    </footer>
</body>
</html>