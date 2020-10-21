@extends('welcome')
@section('contenido')
      <!--/ Nav Star /-->
  @include('page.navbar')
  <!--/ Nav End /-->
  <!--/ bienvenido Star /-->
  @include('page.bienvenido')
  <!--/ bienvenido end /-->
  <!--/ nosotros Star /-->
  @include('page.nosotros')
  <!--/ nosotros End /-->
  @include('components.frmPedido')
@endsection