<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Hash;
use Auth;

class Settings extends Component
{
    public $name = null;
    public $email = null;
    public $password = null;
    public $phone = null;

    public function render()
    {
        return view('livewire.settings');
    }
    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->phone = '';
    }
    public function submit()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);
        $data = [
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone
        ];
        if($this->password != null)
        {
            $data = $data + ["password" => Hash::make($this->password)];
        }
        $user = User::find(Auth::user()->id)->update($data);
        session()->flash('message', 'Updated Successfully');
    }
}
