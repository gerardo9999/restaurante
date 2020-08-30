@if(session()->has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
            <strong></strong> {{ session('success') }}
        </div>
    </div>
</div>
@endif

@if(session()->has('info'))
<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
            <strong></strong> {{ session('info') }}
        </div>
    </div>
</div>
@endif

@if(session()->has('warning'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
            <strong></strong> {{ session('warning') }}
        </div>
    </div>
</div>
@endif


@if(session()->has('danger'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
            <strong></strong> {{ session('danger') }}
        </div>
    </div>
</div>
@endif


@if(session()->has('primary'))
<div class="alert alert-primary alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
            <strong></strong> {{ session('primary') }}
        </div>
    </div>
</div>
@endif


@if(session()->has('dark'))
<div class="alert alert-dark alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
            <strong></strong> {{ session('dark') }}
        </div>
    </div>
</div>
@endif


@if(session()->has('secondary'))
<div class="alert alert-secondary alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <div class="row">
        <div class="alert-icon">
            <i class="fas fa-check"></i>
        </div>
        <div class="alert-message">
            <strong></strong> {{ session('secondary') }}
        </div>
    </div>
</div>
@endif