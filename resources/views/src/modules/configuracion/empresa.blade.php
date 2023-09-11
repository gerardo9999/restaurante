@extends('layouts.app-configuracion')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Empresa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Empresa</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="card card-primary card-outline pt-4">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('admin-lte/dist/img/user4-128x128.jpg')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->empresa->razon_social}}</h3>
                <p class="text-muted text-center">
                    {{ $user->empresa->encargado }}
                </p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Contactos</b> <a class="float-right">322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Proveedores</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Empleados</b> <a class="float-right">50</a>
                  </li>
                </ul>
                <br>
                <a href="#" class="btn btn-primary btn-block"><b>Logotipo</b></a>
              </div>
              <br>
            </div>
          </div>
          <div class="col-md-9">
            <div class="card card-primary card-outline">
            
              <div class="card-header">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active btn-sm" href="#data-empresa" data-toggle="tab">Datos de Empresa</a></li>
                </ul>
              </div>

              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane pt-3" id="data-empresa">
                    <form class="form-horizontal">
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Razón Social</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Razón Social">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Encargado</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Encargado">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">NIT</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="NIT">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Correo</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Correo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputSkills" class="col-sm-2 col-form-label">Dirección</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Dirección">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Teléfono</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Teléfono">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Guardar</button>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
