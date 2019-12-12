<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Chợ Việt</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="view/img/favicon.png">

    <!-- Google Fonts
		============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/bootstrap.min.css">

    <!-- Nivo slider CSS
		============================================ -->
    <link rel="stylesheet" type="text/css" href="view/lib/custom-slider/css/nivo-slider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="view/lib/custom-slider/css/preview.css" media="screen" />

    <!-- Fontawsome CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/font-awesome.min.css">

    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/owl.carousel.css">

    <!-- jquery-ui CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/jquery-ui.css">

    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/meanmenu.min.css">

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/animate.css">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/style.css">

    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="view/css/responsive.css">

    <!-- modernizr JS
		============================================ -->
    <script src="view/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Custom  JS
		============================================ -->
	<script src="view/custom_js/lib/jquery.js"></script>
	<script src="view/custom_js/lib/jquery.mockjax.js"></script>
    <script src="view/custom_js/dist/jquery.validate.js"></script>
</head>


<body>
    <!-- header start -->
    <header class="header-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <div class="header-top-left">
                            <div class="language-usd">
                                <ul>
                                    <li><a href="#">Freeship cho đơn hàng trên 99k</a>
                                    </li>
                                    <li><a href="#">Kênh nhà bán</a>
                                        <ul class="submenu-mainmenu">
                                                <li><a href="admin-store.php">Đăng nhập</a></li>
                                                <li><a href="?act=dangkithanhvien">Đăng ký</a></li>
                                            </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right">
                            <div class="account-cart">
                                <ul>

                                    <?php
                                        if (isset($_SESSION['iduserguest'])) {
                                            $info_user=info_user($_SESSION['iduserguest']);
                                            echo'
                                                <li class="account"><a href="#">'.$info_user['fullname'].'</a>
                                                    <ul class="submenu-mainmenu">
                                                        <li><a href="?act=logout_user">Đăng xuất</a></li>
                                                    </ul>
                                                </li>
                                            ';                                            
                                        }else {
                                            echo'
                                                <li class="account"><a href="#">Tài khoản</a>
                                                    <ul class="submenu-mainmenu">
                                                        <li><a href="?act=loginuser">Đăng nhập</a></li>
                                                        <li><a href="?act=dangkitaikhoan">Đăng kí</a></li>
                                                    </ul>
                                                </li>
                                            ';
                                        }
                                    ?>
                                  
                                       
                                    </li>
                                    <li class="cart" id="cart-padding">
                                    <?php if(!isset($_SESSION['iduserguest'])){ ?>
                                            <a href="?act=login"><img src="view/img/icon/cart.png" alt="cart"><p>0</p></a>
                                          <?php   }else{ ?>
                                            <a href="?act=cart"><img src="view/img/icon/cart.png" alt="cart"><p><?= count(show_cart($_SESSION['iduserguest'])); ?></p></a>
                                            <?php } ?>
                                    </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                        <div class="logo">
                            <a href="?act=home"><img src="view/img/logo/logo.png" alt="Logo Chợ Việt"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8 col-sm-6">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="?act=home">Trang chủ</a>
                                    </li>
                                    <li><a href="#">Danh mục</a>
                                        <div class="mega-menu">
                                            <span>
                                                <?php
                                                    $cataloglist_0_7=cataloglist_header(0,7);
                                                    foreach ($cataloglist_0_7 as $cat) {                                                        
                                                            echo'<a href="?act=product&idCatalog='.$cat['id'].'">'.$cat['name'].'</a>';
                                                    }
                                                ?>
                                            </span>

                                            <span>
                                                <?php
                                                    $cataloglist_8_15=cataloglist_header(7,7);
                                                    foreach ($cataloglist_8_15 as $cat) {                                                        
                                                            echo'<a href="?act=product&idCatalog='.$cat['id'].'">'.$cat['name'].'</a>';
                                                    }
                                                ?>
                                            </span>

                                            <span>
                                                <?php
                                                    $cataloglist_8_15=cataloglist_header(14,7);
                                                    foreach ($cataloglist_8_15 as $cat) {                                                        
                                                            echo'<a href="?act=product&idCatalog='.$cat['id'].'">'.$cat['name'].'</a>';
                                                    }
                                                ?>
                                            </span>

                                            <span>
                                                <?php
                                                    $cataloglist_8_15=cataloglist_header(21,7);
                                                    foreach ($cataloglist_8_15 as $cat) {                                                        
                                                            echo'<a href="?act=product&idCatalog='.$cat['id'].'">'.$cat['name'].'</a>';
                                                    }
                                                ?>
                                            </span>


                                        </div>
                                    </li>
                                    <li><a href="?act=product">Cửa hàng</a>
                                    </li>
                                    <li><a href="?act=about">Thông tin</a>
                                    </li>
                                    <li><a href="?act=contact">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-6 col-xs-12">
                        <div class="search-box">
                            <form action="#">
                                <input type="text" placeholder="Tìm gì cũng có !">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area start -->
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.html">HOME</a>
                                        <ul>
                                            <li><a href="index.html">Home Version 1</a></li>
                                            <li><a href="index-2.html">Home Version 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-full-grid.html">Women</a></li>
                                    <li><a href="shop-full-grid.html">Accessories</a></li>
                                    <li><a href="blog-full-view.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-full-view.html">Blog Full View</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-full-grid.html">Cửa hàng</a>
                                        <ul>
                                            <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                            <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                            <li><a href="shop-full-grid.html">Shop None Sidebar</a></li>
                                            <li><a href="product-details-fullwidth.html">Product Details Fullwidth</a></li>
                                            <li><a href="product-details-left-sidebar.html">Product Details Left Sidebar</a></li>
                                            <li><a href="product-details-right-sidebar.html">Product Details Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile Menu Area end -->
    </header>
    <!-- header end -->
