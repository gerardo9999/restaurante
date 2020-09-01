@extends('principal.index')
@section('contenido')

<div class="container-fluid">
    <div class="card card-accent-info">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Crear Nuevo repartidor
        </div>
        <form action="{{ route('repartidor.store') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="nombres" class="label-items">Nombre</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" value="{{ old('nombre') }}" placeholder="escribe los nombre" >
                    @error('nombres') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="form-group col-6">
                    <label for="" class="label-items">Apellidos</label>
                    <input type="text"  name="apellidos" class="form-control form-control-sm " value="{{ old('apellidos') }}" placeholder="escribe los apellidos" >
                    @error('apellidos') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="form-group col-6">
                    <label for="login" class="label-items">Usuario</label>
                    <input type="text" name="login" class="form-control form-control-sm" value="{{ old('login') }}" placeholder="escribe el usuario" >
                    @error('login') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="form-group col-6">
                    <label for="" class="label-items">Password</label>
                    <input type="password"  name="password" class="form-control form-control-sm "  placeholder="*****************" >
                    @error('password') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
            </div>



            <div class="row">
                <div class="form-group col-4">
                    <label for="cedulaID" class="label-items">CedulaID</label>
                    <input type="text" name="cedulaID" class="form-control form-control-sm" value="{{ old('cedulaID') }}" placeholder="digite numero de cedulaID" >
                    @error('cedulaID') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>

                <div class="form-group col-4">
                    <label for="telefono" class="label-items">Telefono</label>
                    <input type="text" name="telefono" class="form-control form-control-sm" value="{{ old('telefono') }}" placeholder="digite numero de telefono" >
                    @error('telefono') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                    
                </div>
                <div class="form-group col-4">
                    <label for="" class="label-items">Direccion</label>
                    <input type="text"  name="direccion" class="form-control form-control-sm "  placeholder="escriba la direccion" >
                    @error('direccion') 
                        <small class="error-validate">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-sm btn-info" >Guardar</button>
            <button type="reset" class="btn btn-sm btn-danger" >Cancelar</button>
        </div>
        </form>
    </div>
</div>
@endsection
