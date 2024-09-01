<?php

use App\Models\User;
use function Livewire\Volt\{state};

state(['user' => new User()]);
?>

<div class="bg-zinc-800 p-4 rounded-xl">
    <div class="flex justify-between">
        <p>{{ $user->full_name }}</p>
        <p>{{ $user->age }} years old</p>
    </div>

    <small class="text-zinc-400">{{ $user->email }}</small>
</div>
