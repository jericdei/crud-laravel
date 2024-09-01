<?php

use App\Models\User;
use function Livewire\Volt\{state, mount};

state(['users' => []]);

mount(function () {
    $this->users = User::all();
})
?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-8">
    @foreach ($users as $user)
        <livewire:user-card :user="$user" />
    @endforeach
</div>
