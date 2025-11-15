@include('layouts.index.head')
@include('layouts.index.nav')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Crear Usuario</h4>
                </div>

                <div class="card-body">
                    <form action="{{route('save_new')}}" method="POST">
                        @csrf
                        <!-- Nombre -->
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group mt-3">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <!-- Botón -->
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary btn-block">
                                Guardar Usuario
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>




@include('layouts.index.footer')