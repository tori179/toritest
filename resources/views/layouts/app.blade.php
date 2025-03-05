<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang quản lý')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #004085;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 60px;
            transition: 0.3s;
        }
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            display: block;
            color: white;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #0056b3;
        }
        .main-content {
            margin-left: 260px;
            padding: 20px;
        }
        .navbar {
            background: #004085;
            color: white;
            height: 60px;
            padding-left: 260px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#"><i class="fa fa-home"></i> Trang chủ</a>
        <a href="#"><i class="fa fa-box"></i> Quản lý hàng hóa</a>
        <a href="#"><i class="fa fa-users"></i> Quản lý khách hàng</a>
        <a href="#"><i class="fa fa-chart-line"></i> Báo cáo thống kê</a>
        <a href="#"><i class="fa fa-cog"></i> Cài đặt</a>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <span class="navbar-brand">Hệ thống quản lý</span>
    </nav>

    <!-- Nội dung chính -->
    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
