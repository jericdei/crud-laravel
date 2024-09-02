<?php

use App\Models\User;
use function Livewire\Volt\{state, mount, on};

state(["users" => []]);

mount(function () {
    $this->users = User::all();
});

on([
    "deleteUser" => function (User $user) {
        $user->delete();
        $this->users = User::all();
    },
]);
?>

<div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
    @foreach ($users as $user)
        <livewire:user-card
            :user="$user"
            :key="$user->id"
        />
    @endforeach
</div>
