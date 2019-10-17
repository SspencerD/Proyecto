@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ config('app.name') }}
        @endcomponent
    @endslot

    ![Logo de industria Corchera][logo]

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('Todos los derechos reservados.')

            Si no deseas recibir más correos , puedes [modificar tus preferencias][unsubscribe].
            [unsubscribe]: {{ url('/configuracion') }}

        @endcomponent
    @endslot

    [logo] https://icsachile.cl/images/logo/logo-of-200x200.png
@endcomponent
