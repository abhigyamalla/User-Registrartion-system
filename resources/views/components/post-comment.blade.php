@props(['comment'])

<article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-4 relative">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60" alt="" width="60" height="60" class="rounded-xl">
    </div>

    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->name}}</h3>

            <p class="text-xs">
                Posted
                <time>{{$comment->created_at->diffForHumans()}}</time>
            </p>
        </header>

        <p>
            {{$comment->body}}
        </p>
    </div>

    <!-- Delete button -->
    <form action="/comment/{{$comment->id}}" method="POST" class="absolute top-2 right-2">
        @csrf
        @method('DELETE')
        <button type="submit" class="text-red-500 hover:text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                <path d="M3 6h18M9 6v12M21 6v12M9 18h6" />
                Delete
            </svg>
        </button>
    </form>
</article>
