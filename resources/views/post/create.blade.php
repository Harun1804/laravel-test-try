<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>Body</label>
    <input type="text" name="body" class="@error('body') is-invalid @enderror" value="{{ old('body') }}">
    @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Save</button>
</form>