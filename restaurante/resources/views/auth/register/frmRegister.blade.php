@extends('autenticacion.auth')
@section('contenido')
<div class="container text-center">
    <div class="form-holder">
      <header>
        <h2>Registrate </h2>
        <h3>Ingresa tu informacion</h3>
      </header>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row">
            <label for="user-name" class="col-md-6 unique">Nombres
                <input id="user-name" type="text" name="nombres" required="">
            </label>
            <label for="user-email" class="col-md-6 unique">Apellidos
                <input id="user-email" type="text" name="apellidos" required="">
            </label>
            <label for="user-email" class="col-md-6 unique">Direccion
                <input id="user-email" type="text" name="direccion" required="">
            </label>
            <label for="user-email" class="col-md-6 unique">Telefono
                <input id="user-email" type="number" name="telefono" required="">
            </label>
            <label for="user-email" class="col-md-6 unique">Email
                <input id="user-email" type="email" name="email" required="">
            </label>
            <label for="user-email" class="col-md-6 unique">Empresa
                <input id="user-email" type="text" name="empresa" required="">
            </label>
            <label for="user-email" class="col-md-6 unique">Usuario
                <input id="user-email" type="text" name="name" required="">
            </label>
            <label for="user-email" class="col-md-6 unique">Password
                <input id="user-email" type="password" name="password" required="">
            </label>
            
          <div class="col-md-12">
            <button id="submit" type="submit" class="btn btn-unique">Registrarse</button>
          </div>
        </div>
      </form>
    </div>
</div>
@endsection