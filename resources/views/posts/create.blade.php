<x-layout.main title="Create page">
<form method="post" action="{{ route('posts.store') }}">
   @csrf
     <x-form_inputs.input_text label="Post title" name="title"/>
     <x-form_inputs.input_text label="Post content" name="content"/>
   <button>Send</button>
</form>
</x-layout.main>