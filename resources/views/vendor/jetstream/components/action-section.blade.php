<div class="card card-default mb-3" {{ $attributes }}>
    <div class="card-header">
        <x-jet-section-title>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">{{ $description }}</x-slot>
        </x-jet-section-title>
    </div>
    <div class="card-body">
        {{ $content }}
    </div>
</div>
{{-- <div class="md:grid md:grid-cols-3 md:gap-6" >
    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">

        </div>
    </div>
</div> --}}
