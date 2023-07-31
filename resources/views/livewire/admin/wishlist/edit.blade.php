<div>
    <form wire:submit="save">
        <label for="description">@lang('Description')</label>
        <input id="description" type="text" wire:model="form.description">

        <label for="is-active">@lang('Active')</label>
        <input id="is-active" type="checkbox" wire:model="form.is_active">

        <label for="buyer">@lang('Buyer')</label>
        <input id="buyer" type="text" wire:model="form.buyer">
        <button type="submit">@lang('Save')</button>
    </form>
</div>
