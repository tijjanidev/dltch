<div>
    <x-jet-form-section submit="createProject">
        <x-slot name="title">
            {{ __('Project Information') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Creating a new project.') }}
        </x-slot>

        <x-slot name="form">
            
            <!-- Title -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <x-jet-input id="title" type="text" class="mt-1 block w-full" wire:model.defer="title" autocomplete="title" />
                <x-jet-input-error for="title" class="mt-2" />
            </div>

            <!-- Client -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="client" value="{{ __('Client') }}" />
                <select id="client" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model.defer="client">
                    <option>Select client</option>
                    @foreach ($clients as $clientale)
                        <option value="{{ $clientale->id }}">{{$clientale->name}}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="client" class="mt-2" />
            </div>


            <!-- Description -->
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label for="description" value="{{ __('Description') }}" />
                <textarea id="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" wire:model.defer="description"></textarea>
                <x-jet-input-error for="description" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __('Project added successfully.') }}
            </x-jet-action-message>

            <x-jet-button wire:loading.attr="disabled" wire:target="createProject">
                <i wire:loading  wire:target="createProject" class="fa fa-spinner fa-spin"></i>
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

</div>
