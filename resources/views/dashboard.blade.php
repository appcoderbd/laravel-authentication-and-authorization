<x-app-layout>
    @if (in_array(auth()->user()->role, ['admin','editor','author']))
    <x-slot name="header">
        <h2 class="font-semibold text-sm text-gray-800 dark:text-gray-200 leading-tight">
            <div class="flex gap-4">
                <a href="{{ route('posts.create') }}" class="underline bg-lime-300 py-1 px-2 text-black hover:text-red-700 rounded-md">NEW POST</a>
                @if(in_array(auth()->user()->role, ['admin','editor']))
                    <a href="#" class="underline bg-lime-300 py-1 px-2 text-black hover:text-red-700 rounded-md">PENDING</a>
                @endif
                <a href="#" class="underline bg-lime-300 py-1 px-2 text-black hover:text-red-700 rounded-md">ALL POST</a>
            </div>
        </h2>
    </x-slot>
    @endif
    <div class="pt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in! Role: ") . auth()->user()->role }}
                </div>
            </div>
        </div>
    </div>

     <div class="py-4">
        <div class="max-w-7xl text-center mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden grid grid-cols-4 gap-4 shadow-sm ">

                <div class="flex item-center bg-gray-600 justify-center px-4 py-4 rounded-xl">

                    <div class="flex flex-col items-center" >
                        <img class="h-24 w-24" src="{{ asset('assets/img/users-icon.svg') }}" alt="User Icon" />

                        <div class="pt-6 pb-3 text-gray-900 dark:text-gray-100">
                            10
                        </div>

                        <p class="text-sm py-4 text-gray-100">Total User count</p>
                        <button class="px-4 bg-emerald-500 text-gray-100 hover:bg-emerald-600 py-2 ring-4 rounded-lg" >View All</button>

                    </div>

                </div>


                <div class="p-6 bg-gray-600 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in! Role: ") . auth()->user()->role }}
                </div>

                <div class="p-6 bg-gray-600 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in! Role: ") . auth()->user()->role }}
                </div>

                <div class="p-6 bg-gray-600 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in! Role: ") . auth()->user()->role }}
                </div>

            </div>
        </div>
    </div>


</x-app-layout>
