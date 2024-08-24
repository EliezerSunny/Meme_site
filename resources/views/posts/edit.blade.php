<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ $post->title }}" required>
        </div>
        <div>
            <label>Content</label>
            <textarea name="content" required>{{ $post->content }}</textarea>
        </div>
        <div>
            <label>Image</label>
            <input type="file" name="image">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 200px;">
            @endif
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
