<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Test Comment</title>
    <style>
        body { font-family: sans-serif; padding: 20px; max-width: 600px; margin: 0 auto; }
        .comment-box { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; border-radius: 5px; background: #f9f9f9; }
        .user-name { font-weight: bold; color: #2c3e50; }
        .time { font-size: 0.8em; color: #888; }
        .alert { padding: 10px; background: #d4edda; color: #155724; margin-bottom: 15px; }
        .error { color: red; }
    </style>
</head>
<body>

    <h1>🛍️ {{ $post->title }}</h1>
    <p>ID bài viết: {{ $post->id }} | Người đăng: User {{ $post->user_id }}</p>
    <hr>

    {{-- Hiển thị thông báo thành công --}}
    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    {{-- Form nhập bình luận --}}
    <h3>💬 Để lại bình luận:</h3>
    <form action="{{ route('comments.store', $post->id) }}" method="POST">
        @csrf
        <textarea name="content" rows="3" style="width: 100%;" placeholder="Nhập nội dung vào đây..."></textarea>
        @error('content')
            <div class="error">{{ $message }}</div>
        @enderror
        <br><br>
        <button type="submit" style="padding: 10px 20px; cursor: pointer;">Gửi Bình Luận</button>
    </form>

    <hr>

    {{-- Danh sách bình luận --}}
    <h3>Danh sách bình luận ({{ $post->comments->count() }}):</h3>
    
    @foreach($post->comments as $comment)
        <div class="comment-box">
            <div class="user-name">{{ $comment->user->name ?? 'Người dùng ẩn danh' }}</div>
            <div class="time">{{ $comment->created_at->diffForHumans() }}</div> <p>{{ $comment->content }}</p>
        </div>
    @endforeach

</body>
</html>