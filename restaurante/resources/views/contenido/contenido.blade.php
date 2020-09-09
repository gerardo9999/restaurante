 @extends('index')
@section('contenido')
    <template v-if="menu==1">
        <frm-cliente></frm-cliente>
    </template>
    <template v-if="menu==2">
<<<<<<< HEAD
        Modulo de Reservas
=======
        <frm-producto></frm-producto>
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
    </template>
    <template v-if="menu==3">
<<<<<<< HEAD
        Modulo de Pedidos
=======
        <frm-mesa></frm-mesa>
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
    </template>
    <template v-if="menu==4">
        <frm-orden></frm-orden>
    </template>
    <template v-if="menu==5">
<<<<<<< HEAD
        <frm-menu></frm-menu>
=======
       <frm-vehiculo></frm-vehiculo>
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
    </template>
    <template v-if="menu==6">
<<<<<<< HEAD
        <frm-categoria></frm-categoria>
=======
         <frm-reserva></frm-reserva>
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
    </template>
    <template v-if="menu==7">
        <frm-producto></frm-producto>
    </template>
    <template v-if="menu==8">
<<<<<<< HEAD
        Modulo de Vehiculo
=======
    <h1>Contenido Menu 8</h1>
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
    </template>
    <template v-if="menu==9">
<<<<<<< HEAD
        <frm-vehiculo></frm-vehiculo>
=======
        <frm-tipo></frm-tipo>
>>>>>>> 77858cce029d1861b0b1dd6d2973c486e3c44e80
    </template>
    <template v-if="menu==10">
        Modulos de Usuarios
    </template>
    <template v-if="menu==11">
        Modulo de Bitacora
    </template>
    <template v-if="menu==12">
        Modulo de Reporte
    </template>
@endsection