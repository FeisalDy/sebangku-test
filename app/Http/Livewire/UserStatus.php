<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserStatus extends Component
{
    public $users;

    protected $listeners = ['updateStatus'];

    public function render()
    {
        return view('livewire.user-status');
    }

    public function updateStatus($userId, $active)
    {
        $user = User::find($userId);
        if ($user) {
            $user->active = $active;
            $user->save();
        }
    }
}
