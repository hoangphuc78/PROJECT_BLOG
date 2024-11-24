<h1>Tạo bài viết mới</h1>
<form action="{{ route('blog.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Tiêu đề" required>
    <textarea name="content" placeholder="Nội dung" required></textarea>
    <button type="submit">Lưu</button>
</form>
