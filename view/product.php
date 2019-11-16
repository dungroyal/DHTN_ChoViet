    <!-- latest blog start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left">
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a><span> - </span></li>
                        <li><a href="shop.html">Danh Mục</a><span> - </span></li>
                        <li class="active">shop grid with left sidebar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-grid-leftsidebar-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="shop-left-sidebar">

                        <div class="single-left-widget">
                            <div class="section-title">
                                <h4>Thông tin Nhà bán hàng</h4>
                                <?php
                                    foreach ($store_by_id as $store) {
                                        echo'
                                        <div class="c-supplier-side">
                                            <div class="b-grid">
                                                <div class="b-grid__img">
                                                <img src="uploads/'.$store['image'].'" alt="img"></div>
                                                <div class="b-grid__content">
                                                        <div class="b-grid__row">
                                                        <span class="b-grid__title">
                                                            <span class="icon-mall"></span>
                                                            '.$store['name'].' </span>
                                                    </div>
                                                    <div class="b-grid__row">
                                                        <ul>
                                                            <li><label>Đánh giá:</label><span>100</span></li>
                                                            <li><label>Số sản phẩm:</label><span>175</span></li>
                                                            <li><label>Ngày tham gia:</label><span>'.$store['Date'].'</span></li>
                                                            <li><label>Tỉnh/TP:</label><span>'.$store['diachi'].'</span></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                
                                ?>
                                
                            </div>
                        </div>

                        
                        <div class="single-left-widget">
                            <div class="section-title">
                                <h4>Danh mục</h4>
                                <ul>
                                    <?php
                                        foreach ($store_by_store as $store) {
                                            echo'
                                                <li><a href="?act=product&idStore='.$store['idStore'].'&idCatalog='.$store['id'].'">'.$store['name'].'</a></li>
                                            ';
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="single-left-widget">
                            <div class="section-title">
                                <h4>filter by price</h4>
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="slider-values">
                                            <label>Range</label>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-left-widget without-background hidden-sm hidden-md">
                            <div class="section-title">
                                <h4>hot deals</h4>
                                <div class="widget-banner">
                                    <a href="#"><img src="view/img/banner/8.jpg" alt=""></a>
                                    <a href="shop-full-grid.html" class="shop-now">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="shop-item-filter">
                        <div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <ul role="tablist">
                                    <li role="presentation" class="active"><a data-toggle="tab" role="tab" aria-controls="grid" class="grid-view" href="#grid"><i class="fa fa-th"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 hidden-xs">
                            <div class="filter-by text-center">
                                <h3>Tên danh mục</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                            <div class="filter-by right">
                                <h4>Show: </h4>
                                <form action="#">
                                    <div class="select-filter">
                                        <select>
                                              <option value="10">12</option>
                                              <option value="20">16</option>
                                              <option value="30">20</option>
                                            </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="tab-content">
                        <div id="grid" class="tab-pane active" role="tabpanel">
                            <div class="row">
                                
                                <div class="col-md-4 col-sm-4 col-xs-12">
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
                                                <div class="new-sale">
                                                    <span>new</span>
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
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-product">
                                        <div class="single-product-item">
                                            <div class="single-product-img clearfix hover-effect">
                                                <a href="#">
                                                    <img class="primary-image" src="view/img/product/7.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="single-product-info clearfix">
                                                <div class="pro-price">
                                                    <span class="new-price">$25.99</span>
                                                </div>
                                                <div class="new-sale">
                                                    <span>new</span>
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
                              
                               
                              
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-product">
                                        <div class="single-product-item">
                                            <div class="single-product-img clearfix hover-effect">
                                                <a href="#">
                                                    <img class="primary-image" src="view/img/product/9.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="single-product-info clearfix">
                                                <div class="pro-price">
                                                    <span class="new-price">$25.99</span>
                                                </div>
                                                <div class="new-sale">
                                                    <span>new</span>
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
                               
                                <div class="col-md-4 col-sm-4 col-xs-12">
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
                                                <div class="new-sale">
                                                    <span>new</span>
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
                                <div class="col-md-4 col-sm-4 col-xs-12">
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
                                                <div class="new-sale">
                                                    <span>new</span>
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
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="single-product">
                                        <div class="single-product-item">
                                            <div class="single-product-img clearfix hover-effect">
                                                <a href="#">
                                                    <img class="primary-image" src="view/img/product/6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="single-product-info clearfix">
                                                <div class="pro-price">
                                                    <span class="new-price">$25.99</span>
                                                </div>
                                                <div class="new-sale">
                                                    <span>new</span>
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
                        <div id="list" class="tab-pane" role="tabpanel">
                            <div class="row">
                                <div class="shop-product-list col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="single-product-item">
                                                    <div class="single-product-img clearfix hover-effect">
                                                        <a href="#">
                                                            <img class="primary-image" src="view/img/product/1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <div class="new-sale">
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center">
                                                        <h3>Full sleev women shirt</h3>
                                                        <h4><a href="#">view details</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop-product-text">
                                                <h4><a href="#">Full sleev women T-shirt</a></h4>
                                                <div class="price-rating-container">
                                                    <div class="price-box"><span>$20.99</span> <del>($25.99)</del></div>
                                                    <div class="rating-right">
                                                        <div class="star-content">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="availability">AVAILABILITY: <span> In stock</span></div>
                                                <h5 class="overview">overview:</h5>
                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.
                                                </p>
                                                <div class="shop-buttons">
                                                    <a class="cart-btn" href="cart.html"><span>Add to Bag</span></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="single-product-item">
                                                    <div class="single-product-img clearfix hover-effect">
                                                        <a href="#">
                                                            <img class="primary-image" src="view/img/product/10.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <div class="new-sale">
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center">
                                                        <h3>Full sleev women shirt</h3>
                                                        <h4><a href="#">view details</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop-product-text">
                                                <h4><a href="#">Full sleev women T-shirt</a></h4>
                                                <div class="price-rating-container">
                                                    <div class="price-box"><span>$20.99</span> <del>($25.99)</del></div>
                                                    <div class="rating-right">
                                                        <div class="star-content">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="availability">AVAILABILITY: <span> In stock</span></div>
                                                <h5 class="overview">overview:</h5>
                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.
                                                </p>
                                                <div class="shop-buttons">
                                                    <a class="cart-btn" href="cart.html"><span>Add to Bag</span></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="single-product-item">
                                                    <div class="single-product-img clearfix hover-effect">
                                                        <a href="#">
                                                            <img class="primary-image" src="view/img/product/4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <div class="new-sale">
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center">
                                                        <h3>Full sleev women shirt</h3>
                                                        <h4><a href="#">view details</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop-product-text">
                                                <h4><a href="#">Full sleev women T-shirt</a></h4>
                                                <div class="price-rating-container">
                                                    <div class="price-box"><span>$20.99</span> <del>($25.99)</del></div>
                                                    <div class="rating-right">
                                                        <div class="star-content">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="availability">AVAILABILITY: <span> In stock</span></div>
                                                <h5 class="overview">overview:</h5>
                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.
                                                </p>
                                                <div class="shop-buttons">
                                                    <a class="cart-btn" href="cart.html"><span>Add to Bag</span></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="single-product-item">
                                                    <div class="single-product-img clearfix hover-effect">
                                                        <a href="#">
                                                            <img class="primary-image" src="view/img/product/7.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <div class="new-sale">
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center">
                                                        <h3>Full sleev women shirt</h3>
                                                        <h4><a href="#">view details</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop-product-text">
                                                <h4><a href="#">Full sleev women T-shirt</a></h4>
                                                <div class="price-rating-container">
                                                    <div class="price-box"><span>$20.99</span> <del>($25.99)</del></div>
                                                    <div class="rating-right">
                                                        <div class="star-content">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="availability">AVAILABILITY: <span> In stock</span></div>
                                                <h5 class="overview">overview:</h5>
                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.
                                                </p>
                                                <div class="shop-buttons">
                                                    <a class="cart-btn" href="cart.html"><span>Add to Bag</span></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="single-product-item">
                                                    <div class="single-product-img clearfix hover-effect">
                                                        <a href="#">
                                                            <img class="primary-image" src="view/img/product/13.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <div class="new-sale">
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center">
                                                        <h3>Full sleev women shirt</h3>
                                                        <h4><a href="#">view details</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop-product-text">
                                                <h4><a href="#">Full sleev women T-shirt</a></h4>
                                                <div class="price-rating-container">
                                                    <div class="price-box"><span>$20.99</span> <del>($25.99)</del></div>
                                                    <div class="rating-right">
                                                        <div class="star-content">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="availability">AVAILABILITY: <span> In stock</span></div>
                                                <h5 class="overview">overview:</h5>
                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.
                                                </p>
                                                <div class="shop-buttons">
                                                    <a class="cart-btn" href="cart.html"><span>Add to Bag</span></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#"><i class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-list col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="single-product">
                                                <div class="single-product-item">
                                                    <div class="single-product-img clearfix hover-effect">
                                                        <a href="#">
                                                            <img class="primary-image" src="view/img/product/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix">
                                                        <div class="new-sale">
                                                            <span>new</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content text-center">
                                                        <h3>Full sleev women shirt</h3>
                                                        <h4><a href="#">view details</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="shop-product-text">
                                                <h4><a href="#">Full sleev women T-shirt</a></h4>
                                                <div class="price-rating-container">
                                                    <div class="price-box"><span>$20.99</span> <del>($25.99)</del></div>
                                                    <div class="rating-right">
                                                        <div class="star-content">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="availability">AVAILABILITY: <span> In stock</span></div>
                                                <h5 class="overview">overview:</h5>
                                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                    ex ea commodo consequat.
                                                </p>
                                                <div class="shop-buttons">
                                                    <a class="cart-btn" href="cart.html"><span>Add to Bag</span></a>
                                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#"><i class="fa fa-refresh"></i></a>
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
    <!-- latest blog end -->
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