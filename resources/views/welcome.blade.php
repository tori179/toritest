@extends('layouts.app')

@section('title', 'Trang Wellcome')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-2 d-none d-md-block bg-primary sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column text-white">
                    <li class="nav-item p-2"><a class="nav-link text-white" href="#"><i class="fas fa-seedling"></i> Ngô</a></li>
                    <li class="nav-item p-2"><a class="nav-link text-white" href="#"><i class="fas fa-leaf"></i> Đậu tương</a></li>
                    <li class="nav-item p-2"><a class="nav-link text-white" href="#"><i class="fas fa-tint"></i> Dầu đậu tương</a></li>
                    <li class="nav-item p-2"><a class="nav-link text-white" href="#"><i class="fas fa-bread-slice"></i> Lúa mì</a></li>
                    <li class="nav-item p-2"><a class="nav-link text-white" href="#"><i class="fas fa-mug-hot"></i> Cà phê</a></li>
                    <li class="nav-item p-2"><a class="nav-link text-white" href="#"><i class="fas fa-oil-can"></i> Dầu thô</a></li>
                </ul>
            </div>
        </nav>
        
        <!-- Main Content -->
        <main role="main" class="col-md-10 ml-sm-auto px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2 text-primary"><i class="fas fa-chart-line"></i> Thị trường nông sản</h1>
                <div class="input-group w-25">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Card thống kê -->
                <div class="col-md-4">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Giá dầu thô</h5>
                            <p class="card-text">Tăng 5% hôm nay</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Giá lúa mì</h5>
                            <p class="card-text">Tăng nhẹ 2%</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Xuất khẩu cà phê</h5>
                            <p class="card-text">Đạt kỷ lục tháng 3</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <table class="table table-striped shadow-sm rounded">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Tin tức</th>
                        <th>Danh mục</th>
                        <th>Thời gian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ngô bật ngược tăng mạnh trong phiên hôm qua</td>
                        <td>Nông sản</td>
                        <td>11:22:00</td>
                    </tr>
                    <tr>
                        <td>Giá dầu đi ngang chờ đợi cuộc họp OPEC+</td>
                        <td>Năng lượng</td>
                        <td>11:22:00</td>
                    </tr>
                    <tr>
                        <td>Giá đường hồi phục nhẹ</td>
                        <td>Nông sản</td>
                        <td>11:22:00</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>
@endsection
