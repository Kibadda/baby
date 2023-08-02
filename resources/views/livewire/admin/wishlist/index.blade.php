<div>
    <a href="{{ route('admin.wishlist.create') }}" wire:navigate>@lang('Create')</a>
    <table>
        <thead>
            <tr>
                <th>@lang('ID')</th>
                <th>@lang('Description')</th>
                <th>@lang('Active')</th>
                <th>@lang('Buyer')</th>
                <th>@lang('created')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wishlistItems as $wishlistItem)
                <tr wire:click="show({{ $wishlistItem->id }})">
                    <td>{{ $wishlistItem->id }}</td>
                    <td>{{ $wishlistItem->description }}</td>
                    <td>{{ $wishlistItem->is_active }}</td>
                    <td>{{ $wishlistItem->buyer }}</td>
                    <td>{{ $wishlistItem->created_at->format('d.m.Y H:i:s') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
