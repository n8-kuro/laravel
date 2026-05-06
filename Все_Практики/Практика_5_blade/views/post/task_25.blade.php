<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
     <p> Data </p>
    <ul>
        @foreach($data as $key => $value)
            <li>{{ $key }}: {{ $value }}</li>
        @endforeach
    </ul>
</x-layout>
