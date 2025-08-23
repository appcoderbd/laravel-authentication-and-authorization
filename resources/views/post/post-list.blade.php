<x-app-layout>


    {{-- <x-slot name="header" >

    </x-slot> --}}


<div class="pt-5">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md hover:shadow-lg transition rounded-xl">
            <div class="p-6 text-gray-900 dark:text-gray-100 flex gap-6">

                <!-- Image box -->
                <div class="flex-shrink-0">
                    <div class="bg-gray-200 dark:bg-gray-700 rounded-2xl p-4">
                        <img src="{{ asset('assets/img/users-icon.svg') }}" class="h-28 w-28 object-cover" alt="Post Image" />
                    </div>
                </div>

                <!-- Content -->
                <div class="space-y-3">
                    <!-- Title -->
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                        This is post title
                    </h2>

                    <!-- Author -->
                    <p class="text-gray-500 text-sm">
                        Post by <span class="font-semibold text-gray-700 dark:text-gray-300">Nazim Uddin</span>
                    </p>

                    <!-- Description -->
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-justify">
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable...
                    </p>

                    <!-- Actions -->
                    <div class="pt-3 flex gap-3">
                        <a href="#" class="px-3 py-1 bg-blue-600 text-white rounded-md text-sm hover:bg-blue-700 transition">Read More</a>
                        <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-md text-sm hover:bg-gray-300 transition">Share</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</x-app-layout>
