<h1>Chỉnh sửa bài viết</h1>
<form action="{{ route('blog.update', $post->id) }}" method="POST">
    @method('PUT')
    @csrf
    <input type="text" name="title" value="{{ $post->title }}" required>
    <textarea name="content" required>{{ $post->content }}</textarea>
    <button type="submit">Cập nhật</button>
</form>
