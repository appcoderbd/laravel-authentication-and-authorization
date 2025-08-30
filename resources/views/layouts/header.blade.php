@if (in_array(auth()->user()->role, ['admin','editor','author']))
    <x-slot name="header">
        <h2 class="font-semibold text-sm text-gray-800 dark:text-gray-200 leading-tight">
            <div class="flex gap-4">
                <a href="{{ route('posts.create') }}" class="underline bg-lime-300 py-1 px-2 text-black hover:text-red-700 rounded-md">NEW POST</a>
                @if(in_array(auth()->user()->role, ['admin','editor']))
                    <a href="{{ route('post.pending') }}" class="underline bg-lime-300 py-1 px-2 text-black hover:text-red-700 rounded-md">PENDING</a>
                @endif
                <a href="{{ route('posts.index') }}" class="underline bg-lime-300 py-1 px-2 text-black hover:text-red-700 rounded-md">ALL POST</a>
            </div>
        </h2>
    </x-slot>
@endif
