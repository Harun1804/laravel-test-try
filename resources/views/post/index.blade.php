<a href="{{ route('posts.create') }}">Tambah Data</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Body</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $post->body }}</td>
                <td><a href="{{ route('posts.edit',$post->id) }}">Edit</a></td>
                <td>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Tidak Ada Data</td>
            </tr>
        @endforelse
    </tbody>
</table>