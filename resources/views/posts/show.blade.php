<x-layout.main title="{{ $post->title }}" h1="{{ $post->title }}">
<p>{{ $post->content }}</p>

<hr>
<a href="{{ route('posts.index') }}">All Posts</a>
</x-layout.main>