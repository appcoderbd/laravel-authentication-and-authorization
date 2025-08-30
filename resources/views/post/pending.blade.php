<x-app-layout>

   @include('layouts.header')


    @foreach ($posts as $post)
            <li>
                <div class="pt-7">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md hover:shadow-lg transition rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">

                                <div class="flex gap-4">
                                    <!-- Image -->
                                    <div class="w-40 h-32 ring-2 ring-purple-400 rounded-xl overflow-hidden">
                                        <img class="w-full h-full object-cover"
                                            src="{{ $post->post_image ? asset('storage/' . $post->post_image) : 'https://static.vecteezy.com/ti/photos-gratuite/t1/29360891-une-petit-vert-lezard-seance-sur-haut-de-une-arbre-bifurquer-generatif-ai-gratuit-photo.jpg' }}"
                                            alt="post Image" />
                                    </div>

                                    <!-- Content -->
                                    <div class="flex flex-col justify-between">
                                        <div>
                                            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $post->title }}</h2>
                                            <p class="text-gray-600 dark:text-gray-400 mt-2">
                                                {{ $post->content }}
                                            </p>
                                        </div>

                                        <!-- Buttons -->
                                        <div class="flex gap-3 mt-4">
                                            <form action="{{ route('posts.publish', $post->id) }}" method="post" >
                                                @csrf
                                                <button type="submit" class="px-4 py-2 bg-pink-600 text-white rounded-xl hover:bg-pink-700">Publish</button>
                                            </form>

                                            <a href="{{ route('posts.show', $post->id) }}" class="px-4 py-2 bg-green-600 text-white rounded-xl hover:bg-green-700">View</a>
                                            <button class="px-4 py-2 bg-red-600 text-white rounded-xl hover:bg-red-700">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
    @endforeach






</x-app-layout>
