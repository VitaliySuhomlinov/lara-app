<x-layout.main title="Edit page">
<h1> Edit Post: #{{ $post->id }} </h1>

<form method="post" action="{{ route('posts.update', [$post->id]) }}">
    @csrf
    @method('PUT')
    <x-form_inputs.input_text label="Title" name="title" default-value="{{ $post->title }}"/>
    <x-form_inputs.input_text label="Content" name="content" default-value="{{ $post->content }}"/>
    <button>Send</button>
</form>

<form method="post" action="/posts/{{$post->id}}">
   @csrf
   @method('DELETE')
   <button>Delete</button>
</form>
</x-layout.main>