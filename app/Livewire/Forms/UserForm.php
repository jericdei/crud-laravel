<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public $id = null;

    #[Validate('required')]
    public $first_name = "";

    #[Validate('required')]
    public $last_name = "";

    #[Validate('required|email')]
    public $email = "";

    #[Validate('required|date')]
    public $birthday = "";

    public function store()
    {
        $this->validate();

        if ($this->id) {
            User::find($this->id)->update($this->all());
        } else {
            User::create($this->all());
        }

        return to_route('users.index');
    }
}
