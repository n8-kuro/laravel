<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot>
    <table>
        <tbody>
        @foreach($string as $index => $cell)
                <tr>
                    <td style="color: green;"> {{ $index }}</td>
                    @foreach ($cell as $value)
                        <td style="color: red"> {{ $value }} </td>
                    @endforeach
                </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>