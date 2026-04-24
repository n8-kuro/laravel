<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <ul>
        @foreach($string as $elem)
            <li>
                @foreach($elem as $e)
                     {{$e}} 
                @endforeach
            </li>
        @endforeach
</ul>
</x-layout>