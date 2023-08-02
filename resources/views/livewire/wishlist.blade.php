<div class="wishlist">
    <ul>
        <div class="horizontal-line">
            @foreach($wishlistItems as $item)
                @if($item->is_active)
                    <li>
                        {{$item->description}}
                    </li>
                @endif
            @endforeach
        </div>
    </ul>
</div>
