<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Password') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Pastikan password anda mudah di ingat dan aman.') }}
    </x-slot>

    <x-slot name="form">
        <div class="row">
            <div class="col-md-3">
                <x-jet-label for="current_password" value="{{ __('Password Lama') }}" />
            </div>
            <div class="col-md-6">
                <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
                <x-jet-input-error for="current_password" class="mt-2" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <x-jet-label for="password" value="{{ __('Password Baru') }}" />
            </div>
            <div class="col-md-6">
                <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
                <x-jet-input-error for="password" class="mt-2" />
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <x-jet-label for="password_confirmation" value="{{ __('Ulangi Password Baru') }}" />
            </div>
            <div class="col-md-6">
                <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
                <x-jet-input-error for="password_confirmation" class="mt-2" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Tersimpan.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
