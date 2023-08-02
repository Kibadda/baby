<?php

namespace App\Livewire;

use App\Models\WishlistItem;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Wishlist extends Component
{
    public String $title;
    public Collection $wishlistItems;

    public function mount(): void
    {
        $this->wishlistItems = WishlistItem::all();
    }
    public function render()
    {
        return view('livewire.wishlist')->title(_("Wishlist"));
    }
}
