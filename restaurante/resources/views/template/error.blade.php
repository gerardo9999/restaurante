{{-- Categoria tipoHabitaciones subCategorias --}}
@error('nombre') 
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
             {{ $message }}
        </div>
    </div>
</div>
@enderror

{{-- tipoHabitaciones --}}
@error('maximoPersonas') 
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
             {{ $message }}
        </div>
    </div>
</div>
@enderror
@error('descripcion') 
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
             {{ $message }}
        </div>
    </div>
</div>
@enderror