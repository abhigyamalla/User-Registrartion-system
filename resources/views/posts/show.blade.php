<x-layout>
    <div class="container mx-auto mt-10 px-4">
        <div class="max-w-4xl mx-auto">
            <section class="bg-white shadow-lg rounded-lg p-6 mb-8">
                <div class="post-header flex items-center mb-4">
                    <div class="flex-shrink-0">
                        <img src="https://i.pravatar.cc/61" alt="" width="50" height="60" class="rounded-xl">
                    </div>

                    <div class="post-author text-gray-800 font-semibold">{{ $post->author->name }}</div>
                    <p class="post-published-at text-gray-400 text-sm ml-2">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </p>
                </div>
                <div class="post-body text-gray-800 leading-relaxed mb-6">
                    {{ $post->body }}
                </div>
            </section>

            <div class="comments-section">
                <h2 class="comments-heading text-xl font-semibold mb-4">Comments</h2>
                @foreach($comments as $comment)
                    <x-post-comment :comment="$comment" />
                    <div class="comment-divider my-4"></div>
                @endforeach
            </div>

            <form action="/comment/{{$post->id}}" method="POST" class="mt-8">
                @csrf

                <div class="comment-input">
                    <label for="content" class="block text-gray-800 font-semibold">Comment</label>
                    <textarea id="body" name="body" class="border border-gray-300 rounded-lg px-4 py-2 w-full" rows="4" required></textarea>
                </div>

                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">
                        Post Comment
                    </button>
                </div>
            </form>

            <a href="/categories/{{$post->author->email}}" class="inline-block mt-4">
                <button class="px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600">
                    Click me to go back
                </button>
            </a>
        </div>
    </div>
</x-layout>

<style>
    /* Add custom styles for the post section */
    section {
        background-color: #F7F9FC;
        border: 1px solid #E2E8F0;
        padding: 1.5rem;
    }

    .post-header {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
    }

    .post-header img {
        width: 60px;
        height: 60px;
        border-radius: 8px;
    }

    .post-author {
        font-weight: 600;
        font-size: 1.2rem;
    }

    .post-published-at {
        font-size: 0.8rem;
    }

    .post-body {
        line-height: 1.6;
    }

    /* Add custom styles for the comments section */
    .comments-section {
        margin-top: 5rem;
        border-top: 1px solid #e2e8f0;
        padding-top: 2rem;
    }

    .comments-heading {
        font-size: 1.4rem;
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .comment-divider {
        margin-bottom: 1.5rem;
    }

    .comment-author {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .comment-author img {
        width: 2rem;
        height: 2rem;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 0.5rem;
    }

    /* Additional styling */
    .comment-input label {
        display: block;
        font-weight: 600;
        color: #374151;
        margin-bottom: 0.5rem;
    }

    .comment-input textarea {
        border: 1px solid #D1D5DB;
        border-radius: 0.375rem;
        padding: 0.5rem;
        width: 100%;
    }
</style>
