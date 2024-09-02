<x-layout title="Users">
    <x-slot:actions>
        <x-button
            type="link"
            href="/users/form"
        >
            Create User
        </x-button>
    </x-slot:actions>

    <livewire:user-list />
</x-layout>
