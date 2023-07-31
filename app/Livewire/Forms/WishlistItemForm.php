<?php

namespace App\Livewire\Forms;

use App\Models\WishlistItem;
use Livewire\Attributes\Rule;
use Livewire\Form;

class WishlistItemForm extends Form
{
    public ?WishlistItem $wishlistItem;

    #[Rule('required')]
    public string $description;

    public bool $is_active = true;

    public ?string $buyer = null;

    public function setWishlistItem(WishlistItem $wishlistItem)
    {
        $this->wishlistItem = $wishlistItem;

        $this->description = $wishlistItem->description;
        $this->is_active = $wishlistItem->is_active;
        $this->buyer = $wishlistItem->buyer;
    }

    public function store()
    {
        WishlistItem::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->wishlistItem->update($this->all());
    }
}
