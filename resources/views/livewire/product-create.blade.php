<x-jet-form-section submit="saveProduct">
    <x-slot name="title">
        {{ __('Add product') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Enter new product.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="block w-full mt-1" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="state.name" class="mt-2" />
        </div>

        <!-- Price -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="price" value="{{ __('Price') }}" />
            <x-jet-input id="price" type="text" class="block w-full mt-1" wire:model.defer="state.price" />
            <x-jet-input-error for="state.price" class="mt-2" />
        </div>

        <!-- Status -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="status" value="{{ __('Status') }}" />
            <select id="status" wire:model.defer="state.status" class="w-full mt-1 form-select">
                <option value="available" class="text-green-500 bg-green-100">Available</option>
                <option value="unavailable" class="text-red-500 bg-red-100">Unavailable</option>
            </select>
            <x-jet-input-error for="state.status" class="mt-2" />
        </div>

        <!-- Image Upload -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="image" value="{{ __('Image') }}" />
            <x-jet-input id="image" type="file" class="block w-full mt-1" wire:model.defer="state.image" />
            <x-jet-input-error for="state.image" class="mt-2" />
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