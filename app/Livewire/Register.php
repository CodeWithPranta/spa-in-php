<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Register extends Component
{
    #[Rule('required|string|min:3', onUpdate: false)]
    public $name = '';
    #[Rule('required|email|unique:users', onUpdate: false)]
    public $email = '';
    #[Rule('required|confirmed|min:6', onUpdate: false)]
    public $password = '';
    public $password_confirmation = '';

    public function register() {
        $validated = $this->validate();
        // Hash Password
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);

        session()->flash('message', 'Your account has created successfully!');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
