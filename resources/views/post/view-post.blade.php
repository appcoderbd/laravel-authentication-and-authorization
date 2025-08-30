<x-app-layout>

    <div class="flex items-center mt-10 justify-center">

        <div class="gap-4" >
            <h2 class="text-white font-bold text-4xl" >{{ $post->title }}</h2>

            <!-- Author -->
            <p class="text-gray-500 text-sm">
                Post by <span class="font-semibold mt-5 text-gray-700 dark:text-gray-300">{{ $post->user->name }}</span>
            </p>

            <div class="w-full h-96 mt-6 rounded-md bg-cover bg-center"
                style="background-image: url('{{ $post->post_image ? asset('storage/' . $post->post_image) : 'https://static.vecteezy.com/ti/photos-gratuite/t1/29360891-une-petit-vert-lezard-seance-sur-haut-de-une-arbre-bifurquer-generatif-ai-gratuit-photo.jpg' }}');">
            </div>

            <div class="mt-5 text-gray-300 text-sm px-10" >
                {{ $post->content }}
            </div>

        </div>

    </div>

</x-app-layout>
