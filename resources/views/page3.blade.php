<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.blade.php">Trang chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="page2.blade.php">Giới Thiệu</a>
      </li>
      <li class="nav-item ">
    <a class="nav-link SanPham-toggle" data-bs-toggle="SanPham" href="#">San Pham</a>
    <ul class="SanPham-menu">
      <li><a class="SanPham-item" href="page3.blade.php">Bàn</a></li>
      <li><a class="SanPham-item" href="page4.blade.php">Ghế </a></li>
     
    </ul>
  </li>
      <li class="nav-item">
        <a class="nav-link" href="page5.blade.php">Liên hệ</a>
      </li>
    </ul>
  
  </div>
</nav>
  <h1>Đây là bàn</h1>

</body>
</html>