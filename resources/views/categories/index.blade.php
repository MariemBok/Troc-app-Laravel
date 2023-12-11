<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex justify-end">
                <a href="{{ route('categories.create') }}" class="px-3 py-2 bg-emerald-500 hover:bg-emerald-600 rounded-md text-sm text-zinc-200">
                    {{ __('Add new category') }}
                </a>
            </div>
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    @include('categories.partials.table', ['categories' => $categories])
            </div>
        </div>

</x-app-layout>