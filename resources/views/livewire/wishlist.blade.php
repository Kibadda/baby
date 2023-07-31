<div class="wishlist">
    <ul>
        @foreach($wishlistItems as $item)
            <li>
                @if($item->is_active)
                    <s>
                        <label>
                            <input type="checkbox" disabled checked>
                            {{$item->description}}
                        </label>
                    </s>
                @else
                    <label>
                        <input type="checkbox" disabled>
                        {{$item->description}}
                    </label>
                @endif
            </li>
        @endforeach
    </ul>
</div>
