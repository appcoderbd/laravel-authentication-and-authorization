<div>
    @if(session('error'))
        <div class="p-4 bg-red-100 text-red-600 rounded">
            {{ session('error') }}
        </div>
    @endif
</div>
