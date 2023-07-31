<?php

namespace App\Livewire\Admin\Wishlist;

use App\Models\WishlistItem;
use Illuminate\Support\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public Collection $wishlistItems;

    public function mount()
    {
        $this->wishlistItems = WishlistItem::all();
    }

    public function show(WishlistItem $wishlistItem)
    {
        return $this->redirect(route('admin.wishlist.edit', $wishlistItem));
    }

    #[Layout('components.layouts.admin')]
    public function render()
    {
        return view('livewire.admin.wishlist.index')
            ->title(_('Wishlist'));
    }
}
