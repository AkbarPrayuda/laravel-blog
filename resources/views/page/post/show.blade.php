<x-layouts.authenticated>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <x-detail-article :post="$post" />
</x-layouts.authenticated>
