<x-layout>
    <x-slot name="title">
        Services
    </x-slot>

    <ul>
        @foreach ($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>

</x-layout>