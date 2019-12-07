    <!-- banner start -->
    <div class="banner-area home-two clearfix">
        <div class="banner-left-img hidden-xs">
            <a href="#" class="border-hover"><img src="uploads/poster1.jpg" alt=""></a>
        </div>
        <div class="banner-rightside">
            <div class="single-banner-small small-one">
                <a href="#" class="border-hover"><img alt="" src="uploads/thucung.jpg"></a>
            </div>
            <div class="single-banner right">
                <a href="#" class="border-hover"><img src="uploads/giaydep.jpg" alt=""></a>
            </div>
            <div class="single-banner left">
                <a href="#" class="border-hover"><img src="uploads/quanao.jpg" alt=""></a>
            </div>
            <div class="single-banner-small small-two">
                <a href="#" class="border-hover"><img alt="" src="uploads/dienthoai.jpg"></a>
            </div>
        </div>
    </div>
    <!-- banner end -->

<br>
<br><br>
<br>

<center>
<h1>Danh Sách Danh Mục</h1>
</center>

<br>
<br><br>
<br>

    <!-- banner start -->
    <div class="banner-area clearfix">
        <div class="single-banner left">
            <a href="#" class="border-hover"><img src="uploads/aonam.jpg" alt=""></a>
        </div>
        <div class="single-banner right">
            <a href="#" class="border-hover"><img src="uploads/aonu.jpg" alt=""></a>
        </div>
    </div>
    <!-- banner end -->



    <!-- featured start -->
    <div class="featured-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>featured products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-tab">
                        <div class="clearfix"></div>
                        <div class="tab-content row">
                            <div id="women" role="tabpanel" class="active section-tab-item">
                                <div class="tab-item-slider">

                                <?php
                                    foreach ($productlist as $pro) { ?>
                                    <form method="POST">
                                        <div class="col-xs-12 col-width">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect" style=" width: 100%; height: 305px;object-fit: contain;">
                                                    <a href="?act=product_detail&idProduct=<?= $pro['id'] ?>">
                                                        <img class="format-image primary-image "  src="uploads/<?=$pro['image']?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3><?= $pro['name'] ?> </h3>
                                                    <h4><a href="?act=product_detail&idProduct=<?= $pro['id'] ?>">Xem chi tiết</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <?php
                                    }
                                ?>
                                </div>
                            </div>
                            <div id="men" role="tabpanel" class="section-tab-item">
                                <div class="tab-item-slider">
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image"  src="view/img/product/2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="trendy" role="tabpanel" class="section-tab-item">
                                <div class="tab-item-slider">
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="single-product">
                                            <div class="single-product-item box-shadow-effect">
                                                <div class="single-product-img clearfix hover-effect">
                                                    <a href="#">
                                                        <img class="primary-image" src="view/img/product/3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="single-product-info clearfix">
                                                    <div class="pro-price">
                                                        <span class="new-price">$25.99</span>
                                                    </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3>Full sleev women shirt</h3>
                                                    <h4><a href="#">view details</a></h4>
                                                </div>
                                                <div class="product-action">
                                                    <ul>
                                                        <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                        <li class="add-bag"><a href="#" data-toggle="tooltip" title="Shopping Cart">Add to Bag</a></li>
                                                        <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured end -->
    <!-- client start -->
    <div class="client-area clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title">
                        <h2>popular Brand</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-owl">
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/5.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/3.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-client">
                            <a href="#"><img src="view/img/client/5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client end -->