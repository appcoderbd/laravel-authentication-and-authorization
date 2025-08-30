<x-app-layout>


    {{-- <x-slot name="header" >

    </x-slot> --}}

    @foreach ($posts as $post)
        <div class="pt-5">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md hover:shadow-lg transition rounded-xl">
                    <div class="p-6 text-gray-900 dark:text-gray-100 flex gap-6">

                        <!-- Image box -->
                        <div class="flex-shrink-0">
                            <div class="bg-gray-200 dark:bg-gray-700 rounded-2xl p-4">
                                <img src="{{ $post->post_image ? asset('storage/' . $post->post_image) : 'https://static.vecteezy.com/ti/photos-gratuite/t1/29360891-une-petit-vert-lezard-seance-sur-haut-de-une-arbre-bifurquer-generatif-ai-gratuit-photo.jpg' }}" class="h-40 w-40 object-cover" alt="Post Image" />
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="space-y-3">
                            <!-- Title -->
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-100">
                                {{ $post->title }}
                            </h2>

                            <!-- Author -->
                            <p class="text-gray-500 text-sm">
                                Post by <span class="font-semibold text-gray-700 dark:text-gray-300">{{ $post->user->name }}</span>
                            </p>

                            <!-- Description -->
                            <p class="text-gray-600 dark:text-gray-400 leading-relaxed text-justify">
                                {{ $post->content }}
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
    @endforeach







</x-app-layout>
