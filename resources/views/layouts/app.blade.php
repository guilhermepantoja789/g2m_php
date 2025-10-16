<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- O título será dinâmico, com um padrão --}}
    <title>@yield('title', 'G2M Tecnologia')</title>

    {{-- Fontes do Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">

    {{-- CDNs Externos (Font Awesome e Swiper CSS) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Arquivos CSS e JS locais processados pelo Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<header class="navbar">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo G2M Tecnologia">
        </a>
        <nav class="navbar-links">
            <a href="{{ url('/') }}#servicos">Serviços</a>
            <a href="{{ url('/') }}#sobre">Sobre Nós</a>
            <a href="{{ url('/') }}#clientes">Clientes</a>
            {{-- Links de Autenticação --}}
            @auth
                <a href="{{ route('clientes.index') }}">Gerenciar Clentes</a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                    @csrf
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); this.closest('form').submit();"
                       class="btn-primary">Sair</a>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-primary">Login</a>
            @endauth
        </nav>
    </div>
</header>

{{-- O @yield('content') substitui a tag <main> inteira --}}
{{-- Cada página vai inserir seu conteúdo principal aqui --}}
@yield('content')

<footer id="contato">
    <div class="container">
        <div class="footer-content">
            <h3>Pronto para transformar sua empresa?</h3>
            <div class="footer-info">
                <p>R. Raphael Almeida, 33, QD 341, Sala 1 - Manaus, AM</p>
                <p><strong>Fone:</strong> (92) 98114-9511</p>
                <p><strong>Email:</strong> <a href="mailto:glaucio@gdoism.com.br">glaucio@gdoism.com.br</a></p>
            </div>
            <div class="social-links">
                <a href="https://www.instagram.com/g2mtecnologia" target="_blank" class="social-icon">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} G2M Tecnologia. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

{{-- CDN Externo do Swiper JS --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
{{-- O @vite já inclui o seu main.js que inicializa o Swiper --}}
</body>
</html>
