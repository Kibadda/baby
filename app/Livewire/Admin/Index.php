<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Admin')]
    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.index');
    }
}
