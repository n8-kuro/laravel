<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <ul>
        @foreach ($array as $elem)
        Количество элементов массива:
        {{ $loop->count}}
          @break
        @endforeach
    </ul>
</x-layout>
