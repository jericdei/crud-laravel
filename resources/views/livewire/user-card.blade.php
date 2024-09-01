<?php

use App\Models\User;
use function Livewire\Volt\{state};

state(['user' => new User()]);
?>

<div class="bg-zinc-800 p-4 rounded-xl hover:bg-zinc-700 cursor-pointer">
    <p>{{ $user->full_name }}, {{ $user->age }}</p>

    <small class="text-zinc-400">{{ $user->email }}</small>
</div>
