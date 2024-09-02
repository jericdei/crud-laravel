<?php

use App\Livewire\Forms\UserForm;
use function Livewire\Volt\{state, form, mount};

state(['user' => null]);

form(UserForm::class);

mount(function () {
    $this->form->fill($this->user ?? []);
});

$submit = function () {
    $this->form->store();
    $this->redirect('/users', navigate: true);
};
?>

<form
    class="flex flex-col gap-4"
    wire:submit.prevent="submit"
>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
        <x-input
            name="form.first_name"
            label="First Name"
            wire:model.live="form.first_name"
        />

        <x-input
            name="form.last_name"
            label="Last Name"
            wire:model.live="form.last_name"
        />
    </div>

    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
        <x-input
            name="form.email"
            label="Email"
            wire:model.live="form.email"
        />

        <div>
            <x-datepicker
                name="form.birthday"
                label="Date of Birth"
                model="form.birthday"
            />
        </div>
    </div>

    <div class="flex justify-end gap-2">
        <x-button
            type="link"
            href="/users"
            variant="error"
        >Cancel</x-button>

        <x-button
            type="submit"
            :disabled="$errors->any()"
        >Submit</x-button>
    </div>
</form>
