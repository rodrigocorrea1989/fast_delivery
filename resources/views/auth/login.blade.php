@include('layouts.index.head')
@include('layouts.index.nav')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Mensaje de sesión -->
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h4>Iniciar sesión</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                required
                                autofocus
                                autocomplete="username">
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3">
                            <label for="password">Contraseña</label>
                            <input
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                id="password"
                                name="password"
                                required
                                autocomplete="current-password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group form-check mt-3">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="remember_me"
                                name="remember">
                            <label class="form-check-label" for="remember_me">Recordarme</label>
                        </div>

                        <!-- Botones -->
                        <div class="d-flex align-items-center mt-4">
                            <button type="submit" class="btn btn-primary ml-auto">
                                Ingresar
                            </button>
                        </div>
                    </form>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
                @endif

            </div>

        </div>
    </div>
</div>
<div class="container mt-2">
    @include('layouts.index.footer')
</div>