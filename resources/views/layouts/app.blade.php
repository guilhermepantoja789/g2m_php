<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'G2M Clientes')</title>
    <style>
        body { font-family: sans-serif; margin: 0; background-color: #f3f4f6; color: #333; }
        .container { max-width: 800px; margin: 2rem auto; padding: 0 1rem; }
        nav { background-color: white; padding: 1rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        nav a { text-decoration: none; color: #333; font-weight: bold; }
        .card { background-color: white; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); margin-top: 2rem;}
        .alert { padding: 1rem; margin-bottom: 1rem; border-radius: 5px; color: white; }
        .alert-success { background-color: #28a745; }
    </style>
</head>
<body>
<nav>
    <div class="container">
        <a href="{{ route('clientes.index') }}">G2M Clientes</a>
    </div>
</nav>

<main class="container">
    @if(session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif

    @yield('content')
</main>
</body>
</html>
