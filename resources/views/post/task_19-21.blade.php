<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
     <p> Fibonacci sequence </p>
    <ul>
        @foreach($array as $elem)
            <li> {{ ($elem * $elem) / $elem }} </li>
        @endforeach
    </ul>
</x-layout>
