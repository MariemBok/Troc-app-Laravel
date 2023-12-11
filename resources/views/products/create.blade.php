<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:!border-none">
                    <form method="post" action="{{ route('products.store') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('post')

                        <div>
                            <x-input-label for="title" :value="__('Product title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->createProduct->get('title')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="description" :value="__('Product description')" />
                            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" />
                            <x-input-error :messages="$errors->createProduct->get('description')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="category_id" :value="__('Product category')" />
                            <select id="category_id" name="category_id" class="mt-1 block w-full">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->createProduct->get('category_id')" class="mt-2" />
                        </div>

                        <!-- <div>
                            <x-input-label for="image" :value="__('Product image')" />
                            <input id="image" name="image" type="file" accept="image/*" class="mt-1 block w-full" required />
                            <x-input-error :messages="$errors->createProduct->get('image')" class="mt-2" />
                        </div> -->

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>