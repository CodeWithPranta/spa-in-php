<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function login(Request $request) {
        $formFields = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return $this->redirect('/', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
