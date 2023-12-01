<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create course') }}
        </h2>
    </x-slot>
    <x-form-card>
        <x-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('courses.store') }}">
            @csrf
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="description" value="{{ __('Description') }}" />
                <textarea id="description"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    type="text" name="description">{{ old('description') }}</textarea>
            </div>

            <div class="mt-4">
                <x-label for="category" value="{{ __('Category') }}" />
                <x-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category')"/>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-form-card>

</x-app-layout>
