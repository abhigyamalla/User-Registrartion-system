
@props(['posts'])
<div class="card">
    <div class="card-body">
        <h2>Latest Posts</h2>
        <div class="posts-container">
         
            <div class="post">
                <div class="post-header">
                    
                    <p class="post-date">{{ $posts->created_at->format('F d, Y') }}</p>
                </div>
                <div class="post-content">
                    <p class="post-body">{{$posts->body }}</p>
                    <a href="/posts/{{$posts->id}}" class="view-button">View</a>
                </div>
            </div>
           
        </div>
    </div>
</div>
