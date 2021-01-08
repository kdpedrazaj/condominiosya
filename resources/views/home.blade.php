@php
$links = [
[
'name' => 'Estado de cuenta',
'dir' => 'images.accountstatus',
'route' => route('Estado de Cuenta')
],
[
'name' => 'Recibos',
'dir' => 'images.receipts',
'route' => route('Recibos')
],
[
'name' => 'Pagos',
'dir' => 'images.payments',
'route' => route('Pagos')
],
[
'name' => 'Reservas',
'dir' => 'images.reserves',
'route' => route('Reservar')
],
[
'name' => 'Cartelera',
'dir' => 'images.billboards',
'route' => route('Cartelera')
]
]
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="">{{ __('Bienvenido ') . Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h2>

    </x-slot>

    <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-4 py-12">

        @foreach ($links as $link)
                <a class="mx-auto sm:px-6 lg:px-8" href="{{ $link['route'] }}">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                        <h2>{{ $link['name'] }}</h2>
                        @include ( $link['dir'] )
                    </div>
                </a>
        @endforeach

    </div>
</x-app-layout>
