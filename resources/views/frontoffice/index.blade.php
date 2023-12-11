<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    @vite(['resources/css/front.css', 'resources/js/app.js'])

</head>
<body>
    <div class="h-screen w-screen">
        <div class="w-full bg-white h-24 px-12 flex items-center shadow-md shadow-slate-200">
            <div class="flex justify-between items-center w-full">
                <div class="flex items-center  gap-12">
                    <a class="text-lg font-bold text-gray-800" href="/home">TROC</a>
                    <div class="w-[1px] bg-gray-200 h-10"></div>
                    <a class="text-sm font-semibold text-[#383D42] hover:text-[#383D42]" href="/home">Home</a>
                    <a class="text-sm font-semibold text-[#999] hover:text-[#383D42]" href="/front-products">Products</a>
                </div>
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    @if(auth()->user()->isAdmin())
                        <div class="px-2 py-1 bg-red-900 text-red-300 rounded-full text-sm">admin</div>
                    @endif
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  bg-white  hover:text-gray-700  focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            @if(auth()->user()->isAdmin())
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
                            @endif
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div>

        <div class="h-[calc(100vh-96px)] w-full p-12">
            <div class="text-3xl text-gray-800 font-bold">
                test
            </div>
        </div>
    </div>
</body>
</html>