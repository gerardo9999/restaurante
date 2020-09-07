 @extends('index')
@section('contenido')
    <template v-if="menu==0">
        <!--<example-component></example-component>   -->
    </template>

    <template v-if="menu==1">
        <frm-categoria></frm-categoria>
    </template>

    <template v-if="menu==2">
        <frm-producto></frm-producto>

    </template>

    <template v-if="menu==3">
        <frm-mesa></frm-mesa>

    </template>

    <template v-if="menu==4">
        <frm-repartidor></frm-repartidor>
    </template>

    <template v-if="menu==5">
        <frm-vehiculo></frm-vehiculo>
    </template>
    
    <template v-if="menu==6">
         <frm-reserva></frm-reserva>
    </template>

    <template v-if="menu==7">
        <frm-cliente></frm-cliente>

    </template>

    <template v-if="menu==8">
    <h1>Contenido Menu 8</h1>
    </template>

    <template v-if="menu==9">
        <frm-tipo></frm-tipo>
    </template>

    <template v-if="menu==10">
        <h1>Contenido Menu 10</h1>
    </template>

    <template v-if="menu==11">
        <h1>Contenido Menu 11</h1>
    </template>

    <template v-if="menu==12">
        <h1>Contenido Menu 12</h1>
    </template>
@endsection