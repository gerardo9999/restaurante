<div class="row">
    <div class="form-group col-8">
        <label>Agregue la Fecha </label>
        <div class="input-group date" id="reservationdate" data-target-input="nearest">
            <input type="date" wire:model="fecha"  class="form-control form-control-sm"/>
            <div class="input-group-append">
                <div class="input-group-text">
                    <button wire:click="agregarMenu()" class="btn btn-success btn-sm">Agregar Fecha</button>
                </div>
            </div>
        </div>
            @error('fecha')
                <small><strong><p style="color: red">{{ $message }}</p></strong></small>
            @enderror
    </div>
</div>