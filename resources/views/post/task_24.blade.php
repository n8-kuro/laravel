<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
     <p> Array </p>
    <ul>
        @foreach($array as $elem)
        <li> 
            @if($elem % 2 == 0)
               {{$elem}}
            @else
               {{!$elem}}
            @endif
        </li> 
        @endforeach
    </ul>
</x-layout>
