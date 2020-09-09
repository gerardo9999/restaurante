 @extends('index')
@section('contenido')
    <template v-if="menu==1">
        <frm-cliente></frm-cliente>
    </template>
    <template v-if="menu==2">
    <frm-reserva></frm-reserva>
    </template>
    <template v-if="menu==3">
        Modulo de Pedidos
    </template>
    <template v-if="menu==4">
        <frm-orden></frm-orden>
    </template>
    <template v-if="menu==5">
        <frm-menu></frm-menu>
    </template>
    <template v-if="menu==6">
        <frm-categoria></frm-categoria>
    </template>
    <template v-if="menu==7">
        <frm-producto></frm-producto>
    </template>
    <template v-if="menu==8">
    <frm-repartidor></frm-repartidor>
    </template>
    <template v-if="menu==9">
        <frm-vehiculo></frm-vehiculo>
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