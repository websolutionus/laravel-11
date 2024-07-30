<div>
    @foreach ($posts as $post)
        <a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a> 
        <br>
    @endforeach
</div>
