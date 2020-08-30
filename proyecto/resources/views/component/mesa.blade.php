<div>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Mesas
            @include('modules.mesa.frmCreate')
        </div>
        <div class="card-body">
            <div class="form-group row">
                @include('modules.mesa.frmSearch')
            </div>
            @include('template.alert') 
            @include('template.error') 
                <div class="row">
                    @foreach ($mesas as $mesa)            
                        <div class="card col-4" >
                            <div class="card-header card-info">
                                <img width="20px" src="{{ asset('imagenes/persona.png') }}" alt=""> {{ $mesa->capacidad }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $mesa->ubicacion }}</h5>
                                <p class="card-text"></p>

                                {{-- <img class="card-img-top"  src="{{ asset('imagenes/mesa1.jpg') }}" alt=""> --}}
                            </div>
                        </div> 
                               
                    @endforeach
                </div> 
            <div class="">
                {{ $mesas->links() }}
            </div>
        </div>
    </div>
</div>