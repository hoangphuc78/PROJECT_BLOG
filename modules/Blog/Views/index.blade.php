<h1>Danh sách bài viết</h1>
<a href="{{ route('blog.create') }}">Tạo bài viết mới</a>

<ul>
    @foreach ($posts as $post)
        <li>{{ $post->title }} - <a href="{{ route('blog.edit', $post->id) }}">Chỉnh sửa</a> - <form action="{{ route('blog.destroy', $post->id) }}" method="POST">@csrf @method('DELETE') <button type="submit">Xóa</button></form></li>
    @endforeach
</ul>
