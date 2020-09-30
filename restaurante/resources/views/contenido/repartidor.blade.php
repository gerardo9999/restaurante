        @if ($opcion ==0)
            @livewire('perfil')
        @endif

        @if ($opcion ==1)
            @livewire('pedido')
        @endif
        @if ($opcion ==2)
            @livewire('menu')
        @endif
        @if ($opcion ==3)
            @livewire('producto')
        @endif
        @if ($opcion ==4)
            @livewire('repartidor')
        @endif
