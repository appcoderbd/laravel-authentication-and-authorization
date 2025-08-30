<x-app-layout>

    <x-slot name="header">

        <a href="{{ route('dashboard') }}"
        class="inline-flex items-center gap-2 px-3 py-2 bg-gray-100 hover:bg-gray-200
                text-gray-700 rounded-md text-sm font-medium transition">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
            </svg>
            Back
        </a>

    </x-slot>

    <div class="pt-10">
        <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold mb-4">Create Post</h1>

             @if (session('status'))
                <div class="mb-4 p-3 text-green-700 bg-green-100 rounded-lg border border-green-300">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Title</label>
                    <input type="text" name="title" value="{{ old('title') }}"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Enter post title">

                        <input type="hidden" value="{{ auth()->user()->id }}" name="user_id"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Enter post title">
                </div>
                @error('title')
                    <div class="text-sm text-red-500" >
                        {{ $message }}
                    </div>
                @enderror

                <!-- Description -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Description</label>
                    <textarea name="content" rows="4"
                        class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                        placeholder="Write your post description">{{ old('content') }}</textarea>
                </div>
                @error('content')
                    <div class="text-sm text-red-500" >
                        {{ $message }}
                    </div>
                @enderror

                <!-- Image -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Upload Image</label>
                    <input type="file" name="post_image"
                        class="w-full px-4 py-3 border rounded-lg bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                @error('post_image')
                    <div class="text-sm text-red-500" >
                        {{ $message }}
                    </div>
                @enderror

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                    Submit
                </button>
            </form>
        </div>
    </div>

</x-app-layout>
