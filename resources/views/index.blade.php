<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Список статей:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center border-black text-xl font-semibold text-gray-800 ">
                        <div class="block mt-1 w-full ">
                            Заголовок
                        </div>
                        <div class="block mt-1 w-full">
                            Бриф
                        </div>
                        <div class="block mt-1 w-full">
                            Автор
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <p>Просмотр</p>
                        </div>

                    </div>
                    @foreach($articles as $article)
                        <div class="flex items-center border-black ">
                            <div class="block mt-1 w-full text-xl font-semibold text-gray-800">
                                {{ $article->title }}
                            </div>
                            <div class="block mt-1 w-full">
                                {{ $article->brief }}
                            </div>
                            <div class="block mt-1 w-full">
                                {{ $article->author }}
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <form action="{{route('show', $article)}}" method="GET">
                                    @csrf
                                    <x-primary-button class="ms-4">
                                        {{ __('Смотреть статью') }}
                                    </x-primary-button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

