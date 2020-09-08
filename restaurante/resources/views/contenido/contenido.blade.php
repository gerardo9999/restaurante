 @extends('index')
@section('contenido')
    

    <template v-if="menu==0">
        <frm-mesa></frm-mesa>
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
    <template v-if="menu==1">
         <frm-cliente></frm-cliente>
    </template>

    <template v-if="menu==8">
        <frm-menu></frm-menu>
    </template>

@endsection