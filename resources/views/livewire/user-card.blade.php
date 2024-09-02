<?php

use function Livewire\Volt\{state};

state(['user']);

$deleteUser = function () {
    $this->dispatch('deleteUser', $this->user);
};
?>

<div
    class="group flex cursor-pointer justify-between rounded-xl bg-zinc-800 p-4 text-zinc-200 hover:bg-zinc-700 dark:bg-zinc-300 dark:text-zinc-800">
    <div>
        <p>{{ $user->full_name }}, {{ $user->age }}</p>

        <small
            class="text-zinc-400 dark:text-zinc-600">{{ $user->email }}</small>
    </div>

    <div class="invisible flex items-start gap-4 group-hover:visible">
        <x-button
            type="link"
            variant="text"
            href="/users/form?id={{ $user->id }}"
            wire:navigate
        >
            <i class="ri-edit-2-fill text-cyan-200 dark:text-cyan-700"></i>
        </x-button>

        <x-button
            wire:click="deleteUser"
            variant="text"
        >
            <i class="ri-delete-bin-5-fill text-red-400 dark:text-red-700"></i>
        </x-button>
    </div>
</div>
