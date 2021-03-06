<div class="card card-default" {{ $attributes }}>
    <div class="card-header">
        <x-jet-section-title>
            <x-slot name="title">{{ $title }}</x-slot>
            <x-slot name="description">{{ $description }}</x-slot>
        </x-jet-section-title>
    </div>
  <div class="card-body">
    <h4 class="card-title">Title</h4>
    <p class="card-text">Body</p>
  </div>
</div>
<div class="md:grid md:grid-cols-3 md:gap-6" >


    <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white shadow sm:rounded-lg">
            {{ $content }}
        </div>
    </div>
</div>
