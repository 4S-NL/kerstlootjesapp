<?php

namespace App\Http\Livewire\Groups;

use Livewire\Component;

class AddMember extends Component
{
    public $group;
    public $showInput = false;

    public function render()
    {
        return view('livewire.groups.add-member');
    }

    public function showInput() {
        $this->showInput = true;
    }
}
