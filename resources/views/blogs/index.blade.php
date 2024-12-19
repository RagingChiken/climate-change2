@foreach ($blogs as $blog)
    <div class="blog-item">
        <h3>{{ $blog->title }}</h3>
        <p>{{ Str::limit($blog->content, 150) }}</p>
        <a href="{{ route('blog.show', $blog->id) }}">Read More</a>
    </div>
@endforeach

<form action="{{ route('search') }}" method="GET">
    <input type="text" name="query" placeholder="Search blogs or threads..." required>
    <button type="submit">Search</button>
</form>

@if(isset($blogs) || isset($threads))
    <h3>Results:</h3>
    <h4>Blogs</h4>
    @foreach($blogs as $blog)
        <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
    @endforeach

    <h4>Threads</h4>
    @foreach($threads as $thread)
        <a href="{{ route('forum.show', $thread->id) }}">{{ $thread->title }}</a>
    @endforeach
@endif

<!-- Menampilkan pagination -->
{{ $blogs->links() }}
