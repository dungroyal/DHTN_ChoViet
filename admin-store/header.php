
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Quản lý cửa hàng</title>
	<link rel="icon" type="view/image/png" href="view/img/favicon.png"/>

  <!-- Custom fonts for this template-->
  <link href="view/style-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="view/style-admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="view/style-admin/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Chợ Việt</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="index.php" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-home"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="index.php">Trang chủ</a>
        </div>
      </li>

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <?php
                if (isset($_SESSION['nameuser'])) {
                    echo'<a class="dropdown-item" href="#"><strong>'.$_SESSION['nameuser'].'</strong></a>
                    <a class="dropdown-item" href="#">Cài đặt</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="?act=logout_admin"  data-target="#logoutModal">Đăng xuất</a>
                  </div>                    
                    ';
                }
            ?>
          
          
      </li>

    </ul>

  </nav>
  

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">      
    <li class="nav-item active">
          <a class="nav-link" href="?act=home">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span>
          </a>
      </li>
    <li class="nav-item active">
        <a class="nav-link" href="#">
        <i class="fas fa-cogs"></i>&ensp;
          <span>Cài đặt giang hàng</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="?act=QL_Catalog">
            <i class="fas fa-fw fa-table"></i>&ensp;
          <span>Quản lý danh mục</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="?act=QL_Product">
        <i class="fas fa-boxes"></i>&ensp;
          <span>Quản lý sản phẩm</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="?act=QL_Comment">
        <i class="far fa-comments"></i>&ensp;
          <span>Quản lý Comment</span></a>
      </li>
    </ul>
    <div id="content-wrapper">