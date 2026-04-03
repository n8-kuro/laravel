<x-layout>
    <x-slot:title>
        {{$title}}
    </x-slot:>
    @if ($age >= 18) 
      Возраст: {{$age}} Больше 18
    @elseif ($age == 18)
      Возраст: {{$age}} Ровно 18
    @else 
      Возраст: {{$age}} Меньше 18
    @endif  
</x-layout>