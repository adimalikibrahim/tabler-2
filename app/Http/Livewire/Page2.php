<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Page2 extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.page2', compact('users'));
    }
}
