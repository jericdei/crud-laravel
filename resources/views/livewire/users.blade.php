<?php

use App\Models\User;
use function Livewire\Volt\{state, mount};

state(['users' => []]);

mount(function () {
    $this->users = User::all();
})
?>

<div class="flex flex-col gap-4 mt-8">
    @foreach ($users as $user)
        <livewire:user-card :user="$user" />
    @endforeach
</div>
