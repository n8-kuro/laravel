<x-layout>
    <x-slot:title>
        {{$title}}
    </x-slot:>
    @unless ($age < 18)
       Aint old enough
    @endunless
</x-layout>