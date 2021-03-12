<form action="{{ route('posts.update',$post->id) }}" method="POST">
    @csrf
    @method('put')
    <label>Body</label>
    <input type="text" name="body" class="@error('body') is-invalid @enderror" value="{{ $post->body }}">
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Edit</button>
</form>