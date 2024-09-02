<x-layout title="{{ $user->full_name ?? 'Create User' }}">
    <livewire:user-form :user="$user" />
</x-layout>
