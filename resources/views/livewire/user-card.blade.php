<?php

use function Livewire\Volt\{state};

state(["user"]);

$deleteUser = function () {
    $this->dispatch("deleteUser", $this->user);
};
?>

<div
    class="group flex cursor-pointer justify-between rounded-xl bg-zinc-800 p-4 hover:bg-zinc-700">
    <div>
        <p>{{ $user->full_name }}, {{ $user->age }}</p>

        <small class="text-zinc-400">{{ $user->email }}</small>
    </div>

    <div class="invisible flex items-start gap-4 group-hover:visible">
        <x-button>
            <i class="ri-edit-2-fill text-cyan-200"></i>
        </x-button>

        <x-button wire:click="deleteUser">
            <i class="ri-delete-bin-5-fill text-red-400"></i>
        </x-button>
    </div>
</div>
