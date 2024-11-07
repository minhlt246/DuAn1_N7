<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang-chu</title>
    <link rel="stylesheet" href="<?php echo '../public/asset/css/style.css'; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="nav-container col-md-12">
            <div class="log-app">
                <a href="index.php">
                    <img src="https://webadmin.beeart.vn/upload/image/20220618/6379113714907065559830131.png" alt="">
                </a>
            </div>
            <div class="search-home-page">
                <button type="button" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                    </svg>
                </button>
                <input type="text" placeholder="Tìm kiếm sản phẩm">
            </div>
            <ul class="menu_ngang">
                <li><a href="index.php?page=product">Sản phẩm</a></li>
                <li><a href="index.php?page=detail">Chi tiết</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><img src="./asset/css/img/logo.webp" alt=""></li>
                <li><a href="index.php?page=signin">Đăng Nhập</a></li>
                <li><a href="index.php?page=register">Đăng ký</a></li>


            </ul>
            <div class="shopping-cart">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                    </svg>
                </a>

            </div>
        </div>