<x-app-layout>

    @include('layouts.header')
    
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
