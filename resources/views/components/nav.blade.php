@php
    $navLinks = [
        
        [
            'name' => 'Agendamentos',
            'route' => '/'
        ],
        [
            'name' => 'Locais',
            'route' => '/locais'
        ],
        [
            'name' => 'Informativos',
            'route' => '/informativos'
        ],
        [ 
            'name' => 'Usuário',
            'route' => '/usuario'
        ],
        
    ];
@endphp
<nav class="navbar navbar-expand-lg bg-blue navbar-dark">
    <div class="container-fluid" style="margin-left:15%">
        <!-- Logo -->
        <a class="navbar-brand ms-3" href="principal.html" >
            <img class="img-fluid_v2" src="{{ asset('assets/logo_clinica.PNG') }}" alt="Logo" height="40">
        </a>

        <!-- Botão do menu para mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Itens da navbar -->
        <div class="collapse navbar-collapse" id="navbarNav"  style="margin-right:25%">
            <ul class="navbar-nav ms-auto me-3"> <!-- Empurra os itens para a direita -->
                <!-- <li class="nav-item">
                    <a class="nav-link fw-bold px-3" href="#"><b>Consultas</b></a>
                </li> -->
                @foreach ($navLinks as $navLink)                        
                    <li class="nav-item">
                        <a class="nav-link fw-bold px-3" href="{{$navLink['route']}}"><b>{{$navLink['name']}}</b></a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <form  action="logout" method="POST">
                        @csrf
                        <button class="nav-link fw-bold px-3" type="submit">Sair</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>