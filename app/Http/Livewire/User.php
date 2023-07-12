<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hash;

class User extends Component
{
    public $users = [];
    public $name = null;
    public $email = null;
    public $phone = null;
    public $user_type = null;
    public $password = null;

    public function render()
    {
        $this->users = \App\Models\User::all();
        return view('livewire.user');
    }
    public function submit()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'user_type' => 'required',
            'password' => 'required'
        ]);
        $data = [
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "user_type" => $this->user_type,
            "password" => Hash::make($this->password),
        ];
        $user = \App\Models\User::create($data);
        session()->flash('message', 'Created Successfully');
    }
}
