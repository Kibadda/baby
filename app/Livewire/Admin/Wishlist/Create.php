<?php

namespace App\Livewire\Admin\Wishlist;

use App\Livewire\Forms\WishlistItemForm;
use Livewire\Component;

class Create extends Component
{
    public WishlistItemForm $form;

    public function save()
    {
        $this->form->store();

        return $this->redirect(route('admin.wishlist.index'));
    }

    public function render()
    {
        return view('livewire.admin.wishlist.create')->title(_('Create Wishlist Item'));
    }
}
