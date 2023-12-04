<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact us') }}
        </h2>
    </x-slot>

    <x-form-card>
        @if (session('info'))
            <x-banner class="mt-4" type="success" :message="session('info')" />   
        @endif
        <x-validation-errors class="mb-4" />
        <form method="POST" action="{{ route('contactus.store') }}">
            @csrf
            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    autocomplete="name" />
            </div>

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"/>
            </div>

            <div class="mt-4">
                <x-label for="message" value="{{ __('Message') }}" />
                <textarea id="message"
                    class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                    type="text" name="message">{{ old('message') }}</textarea>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Send message') }}
                </x-button>
            </div>
        </form>
    </x-form-card>
</x-app-layout>
