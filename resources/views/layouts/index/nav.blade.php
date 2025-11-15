<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('index')}}#">Fast Delivery</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>
        </ul>

        @guest
        <span class="navbar-text">
            <a href="{{ route('login') }}" class="btn btn-outline-success">Iniciar sesión</a>
        </span>
        @endguest

        @auth
        <span class="navbar-text">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-success">
                    Cerrar sesión
                </button>
            </form>
        </span>
        @endauth

    </div>
</nav>
<div class="container mt-3">
    <p><strong>
            @auth
            {{ ucwords(auth()->user()->name) }}
            @endauth
    </p></strong>
</div>