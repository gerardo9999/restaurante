 @extends('index')
@section('contenido')
    <template v-if="menu==0">
        <!--<example-component></example-component>   -->
    </template>

    <template v-if="menu==1">
        Menu ==1
    </template>
    <template v-if="menu==2">
        Menu ==2
    </template>
    <template v-if="menu==3">
        Menu ==3
    </template>

    <template v-if="menu==4">
        Menu ==4
    </template>

    <template v-if="menu==5">
        <h5>Contenido Menu 5</h1>
    </template>
    
    <template v-if="menu==6">
        <h5>Contenido Menu 6</h1>

    </template>

    <template v-if="menu==7">
        <h5>Contenido Menu 7</h1>

    </template>

    <template v-if="menu==8">
        <h5>Contenido Menu 8</h1>

    </template>

@endsection