@extends('layouts.app')

@section('title', 'Tổng Quan Tin Tức')

@section('content')
<div class="container mt-4">
    <!-- Banner lớn -->
    <div class="jumbotron text-white bg-primary text-center rounded p-5">
        <h1 class="display-4">Cập Nhật Thị Trường Nông Sản</h1>
        <p class="lead">Những tin tức mới nhất về giá cả, cung cầu và xu hướng thị trường.</p>
    </div>

    <!-- Danh sách tin tức mới nhất -->
    <div class="row">
        <div class="col-md-8">
            <h3 class="text-primary mb-3">Tin Mới Nhất</h3>
            <div class="list-group">
                <a href="{{ url('/news/1') }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Ngô bật ngược tăng mạnh</h5>
                    <small>07-03-2025</small>
                    <p class="mb-1">Giá ngô tăng mạnh trong phiên giao dịch hôm qua do nhu cầu xuất khẩu tăng cao...</p>
                </a>
                <a href="{{ url('/news/2') }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Giá dầu đi ngang chờ đợi OPEC+</h5>
                    <small>06-03-2025</small>
                    <p class="mb-1">Các nhà đầu tư đang chờ đợi quyết định từ OPEC+ về cắt giảm sản lượng...</p>
                </a>
                <a href="{{ url('/news/3') }}" class="list-group-item list-group-item-action">
                    <h5 class="mb-1">Giá đường hồi phục nhẹ</h5>
                    <small>05-03-2025</small>
                    <p class="mb-1">Giá đường tăng trở lại sau khi chạm đáy 3 tháng vào đầu tuần...</p>
                </a>
            </div>
        </div>
        
        <!-- Sidebar với các danh mục tin tức -->
        <div class="col-md-4">
            <h3 class="text-primary mb-3">Danh Mục</h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="#" class="text-dark">Nông sản</a></li>
                <li class="list-group-item"><a href="#" class="text-dark">Năng lượng</a></li>
                <li class="list-group-item"><a href="#" class="text-dark">Kim loại</a></li>
                <li class="list-group-item"><a href="#" class="text-dark">Tài chính</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
