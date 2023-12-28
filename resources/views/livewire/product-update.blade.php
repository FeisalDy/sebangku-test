<x-jet-form-section submit="updateProduct">
    <x-slot name="title">
        {{ __('Product Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your product information.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="image" value="{{ __('Image') }}" />
            <input id="image" type="file" wire:model="image" class="block w-full mt-1" />
            <x-jet-input-error for="image" class="mt-2" />
        </div>

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="block w-full mt-1" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Price -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="price" value="{{ __('Price') }}" />
            <x-jet-input id="price" type="text" class="block w-full mt-1" wire:model.defer="state.price" />
            <x-jet-input-error for="price" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="status" value="{{ __('Status') }}" />
            <select id="status" wire:model.defer="state.status" class="block w-full mt-1 form-select">
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            <x-jet-input-error for="status" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>