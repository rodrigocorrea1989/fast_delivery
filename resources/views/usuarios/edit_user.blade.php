@include('layouts.index.head')
@include('layouts.index.nav')

@php
$name = $user->name;
$email = $user->email;
@endphp


<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Editar Usuario</h4>
                </div>

                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <!-- Nombre -->
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" value="{{ $name }}" class="form-control text-danger" name="name" id="name" disabled required>
                        </div>

                        <!-- Email -->
                        <div class="form-group mt-3">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control text-danger" value="{{ $email }}" name="email" id="email" required>
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3">
                            <label for="password"></label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inline1"> Cambiar contraseña </label>
                                <input class="form-check-input ml-2 mt-1" type="checkbox" id="inline1" value="option1">
                            </div>
                            <input type="password" class="form-control" name="password" id="password" disabled required>
                        </div>

                        <!-- Botón -->
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-success btn-block">
                                Editar Usuario
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>




@include('layouts.index.footer')