<?php

use App\Models\User;
use function Livewire\Volt\{mount, on, with, usesPagination};

usesPagination();

with(fn() => ['users' => User::latest()->paginate(12)]);

on([
    'deleteUser' => function (User $user) {
        $user->delete();
        $this->users = User::latest()->paginate();
    },
]);
?>

<div class="flex flex-col gap-16">
    <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
        @foreach ($users as $user)
            <livewire:user-card
                :user="$user"
                :key="$user->id"
            />
        @endforeach
    </div>

    {{ $users->links() }}
</div>
