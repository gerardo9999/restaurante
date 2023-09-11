@extends('layouts.app-configuracion')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Roles & Permisos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Roles & Permisos</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Timelime example  -->
            <div class="row">
                @foreach ($roles as $rol)
                    <div class="col-md-12">
                        <!-- The time line -->
                        <div class="timeline">
                            <!-- timeline time label -->
                            <div class="time-label">
                                <span class="bg-info">{{$rol->name}}</span>
                            </div>
                            <!-- /.timeline-label -->
                            <!-- timeline item -->
                            <div>
                                <i class="fas fa-check bg-blue"></i>
                                <div class="timeline-item">
                                    <span class="time">
                                        {{-- <i class="fas fa-clock"></i> 12:05 --}}
                                    </span>
                                    <h3 class="timeline-header">
                                        Permisos asignados
                                    </h3>

                                    <div class="timeline- m-2 p-2">
                                        <div class="row">
                                            @foreach ($rol->permisos as $permiso)
                                                <div class="col-sm-6">
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-primary d-inline">
                                                            <input type="checkbox" id="{{$permiso->pivot->permiso_id}}{{$permiso->pivot->rol_id}}" @if ($permiso->pivot->status)
                                                                checked
                                                            @endif>
                                                            <label for="{{$permiso->pivot->permiso_id}}{{$permiso->pivot->rol_id}}">
                                                                {{$permiso->name}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-left">
                                                    <div class="form-group clearfix">
                                                        <div class="icheck-primary d-inline">
                                                        <p>{{$permiso->description}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <i class="fas fa-check bg-gray"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- /.timeline -->

    </section>
@endsection
