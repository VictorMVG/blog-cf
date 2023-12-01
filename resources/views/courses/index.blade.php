<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-gray-500 dark:text-white"">
            <a href="{{ route('courses.create') }}">{{ __('Create course') }}</a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-gray-800 dark:text-white">
            <ul>
                @foreach ($courses as $course)
                <li>
                    <a href="{{ route('courses.show', $course->slug) }}">
                        {{ $course->name }}
                    </a>
                </li>
                @endforeach
            </ul>
            {{ $courses->links()  }}
        </div>
    </div>
</x-app-layout>