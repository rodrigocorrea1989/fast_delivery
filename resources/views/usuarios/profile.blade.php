@include('layouts.index.head')
@include('layouts.index.nav')
@php

$tipo = auth()->user()->tipo;

@endphp

@if ($tipo == 0)
@php $tipo = 'Usuario'; @endphp
@else
@php $tipo = 'Administrador'; @endphp
@endif


<div class="container">
    <!-- Contenido principal -->
    <main class="col-md-9 ml-sm-auto col-lg-10">
        <div class="border-bottom">
            <h3>Panel de Usuario</h3>
        </div>

        <!-- Tarjetas -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Nombre</h5>
                        <p class="card-text">{{ auth()->user()->name }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Correo</h5>
                        <p class="card-text">{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Rol</h5>
                        <p class="card-text">{{ $tipo }}</p>
                    </div>
                </div>
            </div>
        </div>

</div>


@include('layouts.index.footer')