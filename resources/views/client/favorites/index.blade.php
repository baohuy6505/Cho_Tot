@extends('layouts.app') @section('title', 'Tin đã lưu')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">❤️ Tin đã lưu của bạn</h2>

    @if(isset($favoritePosts) && $favoritePosts->count() > 0)
        <div class="row">
            @foreach($favoritePosts as $post)
                <div class="col-md-3 col-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ $post->images->count() > 0 ? asset($post->images->first()->image_path) : asset('images/no-image.jpg') }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        
                        <div class="card-body">
                            <h5 class="card-title text-truncate">{{ $post->title }}</h5>
                            <p class="text-danger font-weight-bold">{{ number_format($post->price) }} đ</p>
                            
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('client.posts.detail', $post->slug) }}" class="btn btn-primary btn-sm">Xem</a>
                                
                                <form action="{{ route('client.favorites.toggle', $post->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn muốn bỏ lưu tin này?')">
                                        Xóa
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $favoritePosts->links() }}
        </div>
    @else
        <div class="text-center py-5">
            <p class="text-muted display-4">📂</p>
            <h4>Bạn chưa lưu tin nào cả!</h4>
            <a href="{{ route('client.posts.list') }}" class="btn btn-warning mt-3">Dạo chợ ngay</a>
        </div>
    @endif
</div>
@endsection