<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Informasi Profil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Perbarui profil anda.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="row">
            <div class="col-md-2">
                <x-jet-label for="name" value="{{ __('Name') }}" />
            </div>
            <div class="col-md-6">
                <x-jet-input id="name" type="text" class="form-control" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>
        </div>
        <!-- Email -->
        <div class="row">
            <div class="col-md-3">
                <x-jet-label for="email" value="{{ __('Email') }}" />
            </div>
            <div class="col-md-6">
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Tersimpan.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
