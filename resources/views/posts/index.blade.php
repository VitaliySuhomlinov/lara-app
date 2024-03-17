<x-layout.main title="Main page" h1="All posts">
   <a href="{{ route('posts.create') }}">Create</a>
   <hr>
   <ul>
   @foreach($posts as $post)
      <li>
      <hr>
      <strong>Title: {{ $post->title }}</strong> : <p>Content: {{ $post->content }} </p>
      <a href="{{ route('posts.show', ['id' => $post->id]) }}">Show</a>
      <a href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit</a>
      <hr>
      <br>
      </li>
   @endforeach
   </ul>
</x-layout.main>

