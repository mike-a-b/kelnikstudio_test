<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Просмотр статьи:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="mt-4">
                            <h1 class="">Заголовок:</h1>
                            <h1 class="p-6 font-semibold text-gray-900 dark:text-gray-100">{{ $article->title }}</h1>
                        </div>
                        <div class="mt-4">
                            <h4>Автор:</h4>
                            <h4 class="p-6 font-semibold text-gray-900 dark:text-gray-100">{{ $article->author }}</h4>
                        </div>
                        <div class="mt-4">
                            <h4>Полный текст статьи:</h4>
                            <h4 class="p-6 font-semibold text-gray-900 dark:text-gray-100">{{ $article->fulltext }}</h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>~
