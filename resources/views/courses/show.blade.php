<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Course:') }} {{ $course->name }}
        </h2>
    </x-slot>

    <div class="py-12 dark:text-white">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:bg-gray-800">
            <a href="{{ route('courses.index') }}" class="prose">Volver a la pagina de cursos</a>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
                <p>Bienvenido a la página del curso: {{ $course->name }}</p>
                <p>Categoria: {{ $course->category }}</p>
            </div>
        </div>
    </div>
</x-app-layout>