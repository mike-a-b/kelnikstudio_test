<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Добавление новой статьи:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('success'))
                        <div class="alert alert-success">
                            <h2>
                                {{ session('success') }}
                            </h2>
                        </div>
                    @endif
                    <form action="{{ route('store') }} " method="post">
                        @csrf
                        <div class="mt-4">
                            <x-input-label for="title" :value="__('Заголовок:')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ old('title') }}" required />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="author" :value="__('Автор:')" />
                            <x-text-input id="author" class="block mt-1 w-full" type="text" name="author" value="{{ old('author') }}" required />
                            <x-input-error :messages="$errors->get('author')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="brief" :value="__('Бриф:')" />
                            <x-text-input id="brief" class="block mt-1 w-full" type="text" name="brief" value="{{ old('brief') }}" required />
                            <x-input-error :messages="$errors->get('brief')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="fulltext" :value="__('Полный текст:')" />
                            <textarea id="fulltext" rows="4" name="fulltext" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                                {{ old('fulltext') }}
                            </textarea>
                            <x-input-error :messages="$errors->get('fulltext')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Сохранить статью') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>~
