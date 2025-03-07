@extends('layouts.app')

@section('title', 'Chi Tiết Tin Tức')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h2 class="mb-0">{{ $news['title'] }}</h2>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <img src="/images/news-placeholder.jpg" class="img-fluid rounded" alt="Hình ảnh tin tức">
                    </div>
                    <p class="text-muted"><strong>Ngày đăng:</strong> {{ $news['date'] }}</p>
                    <p class="lead">{{ $news['content'] }}</p>
                </div>
            </div>
            <div class="mt-4">
                <h4 class="text-primary">Tin tức liên quan</h4>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#" class="text-dark">Thị trường đậu tương tăng điểm nhờ xuất khẩu Mỹ</a></li>
                    <li class="list-group-item"><a href="#" class="text-dark">Dầu đậu tương tăng theo xu hướng thế giới</a></li>
                    <li class="list-group-item"><a href="#" class="text-dark">Ngô và lúa mì có thể sẽ giao dịch lình xình trong biên độ hẹp</a></li>
                </ul>
            </div>
            <div class="mt-3 text-center">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </div>
    </div>
</div>
@endsection