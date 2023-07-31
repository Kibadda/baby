<?php

namespace App\Livewire\Admin\Wishlist;

use App\Livewire\Forms\WishlistItemForm;
use App\Models\WishlistItem;
use Livewire\Component;

class Edit extends Component
{
    public WishlistItemForm $form;

    public function mount(WishlistItem $wishlistItem)
    {
        $this->form->setWishlistItem($wishlistItem);
    }

    public function save()
    {
        $this->form->update();

        return $this->redirect(route('admin.wishlist.index'));
    }

    public function render()
    {
        return view('livewire.admin.wishlist.edit')->title(_('Edit Wishlist Item'));
    }
}
