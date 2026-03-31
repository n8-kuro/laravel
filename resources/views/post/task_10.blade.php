<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>

    <ul>
        @foreach($location as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
</x-layout>