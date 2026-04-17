<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <ul>
        @foreach($employe as $elem)
            <li>
                @foreach($elem as $e)
                     {{$e}} 
                @endforeach
            </li>
        @endforeach
</ul>
</x-layout>