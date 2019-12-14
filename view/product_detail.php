        <!--Start Product Details area  -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a><span> - </span></li>
                            <li><a href="shop.html">Shop</a><span> - </span></li>
                            <li class="active">Product Details Full Width</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>  
        <!--Start Product Details area  -->      
        <div class="product-details-area fullwidth">
            <div class="container">   
                <div class="row">
                <form method="post" action="">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                       <div class="zoomWrapper clearfix">
                            <div class="product-thumb">
                                <ul class="p-details-slider" id="gallery_01">
                                    <li>
                                        <a class="elevatezoom-gallery" href="#" data-image="uploads/<?=$product_detail_by_id['image'];?>" data-zoom-image="uploads/<?=$product_detail_by_id['image'];?>"><img src="uploads/<?=$product_detail_by_id['image'];?>" alt=""></a>
                                    </li>
                                </ul>
                            </div>
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="uploads/<?=$product_detail_by_id['image'];?>" data-zoom-image="uploads/<?=$product_detail_by_id['image'];?>" alt="big-1">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="product-detail shop-product-text">
                            <h4><a href="#"><?=$product_detail_by_id['name'];?></a></h4>
                            </div>

                            <div class="wrap_row clearfix">
                            <div class="rowlprodetail">
                                <div class="price_and_no">
                                    <p class="price promo_price">
                                        <strong><?= number_format($product_detail_by_id['specialprice'])?> ₫</strong> <del><?= number_format($product_detail_by_id['price'])?> ₫</del>
                                    </p>
                                    <p class="price">

                                    <?php
                                        $tietkiem=$product_detail_by_id['price']-$product_detail_by_id['specialprice']
                                    ?>
                                        <span>Tiết kiệm:</span><?=number_format($tietkiem)?> ₫ <em>-<?=round($phantram= (($tietkiem)/($product_detail_by_id['price']))*100,1);?>%</em>
                                    </p>
                                </div>
                            </div>
                            <ul class="policy policybg">
                                <li class="inprr">
                                    <span><strong>Tình Trạng sản phẩm: </strong> 
                                        <?php
                                            if($product_detail_by_id['product_status']==0){
                                                echo"Mới 100%";
                                            }
                                            if($product_detail_by_id['product_status']==1){
                                                echo"Like New";
                                            }
                                            if($product_detail_by_id['product_status']==2){
                                                echo"Đã qua sử dụng";
                                            }
                                        ?>
                                    </span>
                                </li></ul>
                        </div>

                        <div class="rowlprodetail">
                            <ul class="policy">
                                <li class="inpr">
                                    <span><strong>Đóng gói: </strong> <?=$product_detail_by_id['package'];?></span>
                                </li>
                                <li class="wrpr">
                                    <span><strong>Bảo hành: </strong> <?=$product_detail_by_id['warranty'];?></span>
                                </li>
                                <li><i class="icon-poltick"></i><strong>Đổi trả: </strong>1 đổi 1 trong 7 ngày nếu có lỗi do nhà sản xuất. </li>
                            </ul>
                        </div>
                            

                            <div class="shop-buttons">
                                <div id="quantity-wanted-p">
                                    <input type="number" value="1" name ="soluong"  class="cart-plus-minus-box">
                                    <div class="dec qtybutton">-</div>
                                    <div class="inc qtybutton">+</div>
                                </div>
                                <input type="submit" class="btn btn-danger" name="addcart" value="Thêm vào giỏ hàng">
                               
                            </div>
                         <strong class="text-danger">   <?php
                                    if(isset($erro)){
                                        echo $erro;
                                    }
                                ?></strong>
                            <div class="share">
                               <h5 class="share">share this on:</h5>
                               <ul>
                                   <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                   <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                   <li><a href="www.google-plus.com"><i class="fa fa-google-plus"></i></a></li>
                                   <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                                   <li><a href="www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                               </ul>
                            </div>
                        </div>
                    </div>

                    </form>

                    <div class="row">
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="product-description-tab">
                                <div class="description-tab-menu">
                                    <ul class="clearfix" role="tablist">
                                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Mô tả chính</a></li>
                                        <li role="tskt"><a href="#tskt" aria-controls="tskt" role="tab" data-toggle="tab">Thông số kĩ thuật</a></li>
                                        <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Đánh giá</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">                                    
                                        <?=$product_detail_by_id['title'];?>
                                    </div>


                                    <div role="tabpanel" class="tab-pane" id="tskt">
                                        <?=$product_detail_by_id['specifications'];?>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="review">
                                       <!-- Review  ------------------------------------------->

										<iframe src="comment.php?idProduct=<?=$product_detail_by_id['id'];?>" frameborder="0" width="100%" height="550px" scrolling="no"></iframe>

                                    <!-- END Review -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="single-left-widget">
                            <div class="section-title">
                                <h4>thông tin Nhà Bán hàng</h4>
                                <?php
                                    foreach ($info_store as $store) {
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
                                                            <li><label>Ngày tham gia:</label><span>'.$store['Date'].'</span></li>
                                                            <li><label>Tỉnh/TP:</label><span>'.$store['district'].', '.$store['city'].'</span></li>
                                                    </ul>
                                                    </div>
                                                <div class="b-grid__row"><a class="btn btn-secondary btn-sm" href="?act=product&idStore='.$GET_idStore['idStore'].'">Xem shop</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        ';
                                    }
                                
                                ?>
                            </div>
                        </div>
                        </div>
                     </div> 
                </div>     
            </div>
        </div>
        <!--End Product Details area  -->
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
                            <div class="section-tab-menu text-left">
                                <ul role="tablist">
                                    <li role="presentation" class="active"><a href="#women" aria-controls="women" role="tab" data-toggle="tab">women</a></li>
                                    <li role="presentation"><a href="#men" aria-controls="men" role="tab" data-toggle="tab">Men</a></li>
                                    <li role="presentation"><a href="#trendy" aria-controls="trendy" role="tab" data-toggle="tab">trendy</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <div class="tab-content row">
                                <div id="women" role="tabpanel" class="active section-tab-item">
                                    <div class="tab-item-slider">
                                        <div class="col-xs-12 col-width">  
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
                                        <div class="col-xs-12 col-width">  
                                            <div class="single-product">
                                                <div class="single-product-item">
                                                    <div class="single-product-img clearfix hover-effect">
                                                        <a href="#">
                                                            <img class="primary-image" src="view/img/product/2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="single-product-info clearfix"> 
                                                        <div class="pro-price">
<!--                                                            <span class="old-price">$26</span>-->
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
                                        <div class="col-xs-12 col-width">  
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
<!--                                                            <span class="old-price">$180</span>-->
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
                                        <div class="col-xs-12 col-width">  
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
<!--                                                            <span class="old-price">$180</span>-->
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
                                        <div class="col-xs-12 col-width">  
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
<!--                                                            <span class="old-price">$180</span>-->
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
                                        <div class="col-xs-12 col-width">  
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
<!--                                                            <span class="old-price">$180</span>-->
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
                                        <div class="col-xs-12 col-width">  
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
<!--                                                            <span class="old-price">$180</span>-->
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
                                        <div class="col-xs-12 col-width">  
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
<!--                                                            <span class="old-price">$180</span>-->
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
                                <div id="men" role="tabpanel" class="section-tab-item">
                                    <div class="tab-item-slider">
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