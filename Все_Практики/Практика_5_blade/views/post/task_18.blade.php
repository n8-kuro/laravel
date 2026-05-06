<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <ul>
        @foreach ($array as $elem)
        Количество элементов массива: {{ $loop->count}}
            @if($elem > 0)
               <p> Сумма элементов: {{ array_sum($array) }}</p>
            @else 
               <p> Количество элементов массива равняется нулю </p>
            @endif
            @break
        @endforeach
    </ul>
</x-layout>
