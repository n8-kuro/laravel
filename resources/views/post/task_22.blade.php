<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <ul>
        !!Top-5 Fav games!!
        @foreach($strings as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
</x-layout>