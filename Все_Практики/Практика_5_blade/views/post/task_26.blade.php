<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
        <table class='table'>
            <tbody>
                @foreach($array as $elem)
                <tr>  
                    @foreach($elem as $e)
                       <td> {{$e}} </td>
                    @endforeach
               </tr>
                @endforeach
            </tbody>
        </table>
</x-layout>