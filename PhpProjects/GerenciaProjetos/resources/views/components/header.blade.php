<header class="bg-success text-white py-3">

    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="d-flex align-items-center">
            <img src="{{ asset('logo.png') }}" alt="Possivel Logo" class="img-fluid" style="max-height: 50px;">
        </a>

        <!-- Navegação -->
        <nav class="d-none d-md-block">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/projetos') }}">Projetos</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url('/Manual') }}">Manual de Uso</a>
                </li>
               

            </ul>
        </nav>

        <!-- Opções do Usuário -->
        <div class="d-flex align-items-center">
            @if (Auth::check())
                @php
                    $user = Auth::user();
                @endphp

                @if ($user->isGerente())
                    <a href="/equipe/cadastro" class="btn btn-light btn-sm me-2">Criar Equipe</a>
                    <!-- <a href="/vs" class="btn btn-light btn-sm me-2">Cadastrar V</a> -->
                    <a href="{{ url('/equipes') }}" class="btn-like-link">Equipes</a>
                    <li class="nav-item">
                    
                </li>
                @elseif($user->isUser())
                    <a href="/projetos" class="btn btn-light btn-sm me-2">Ver Projetos</a>
                    
                @endif

                <form action="{{ route('usuarios.logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-light btn-sm">Sair</button>
                </form>
            @else
                <a href="{{ route('usuarios.login') }}" class="btn btn-light btn-sm me-2">Login</a>
                <a href="{{ route('usuarios.cadastro') }}" class="btn btn-light btn-sm">Cadastre-se</a>
            @endif
        </div>
    </div>
</header>
    