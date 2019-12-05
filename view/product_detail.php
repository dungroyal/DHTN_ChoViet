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
                            <div class="price-rating-container">    
                                <div class="price-box"><span><?= number_format($product_detail_by_id['price'])?> vnđ</span> <del>(15.500.000 VNĐ)</del></div>
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
                            <div class="availability">Tình trang: <span>Còn hàng</span></div>
                            <h5 class="overview">Tổng quan:</h5>
                            <p class="product-desc"><?=$product_detail_by_id['descripsion'];?></p>
                            <div class="size-categories">
                                <h5 class="size">Màu:</h5>
                                <div class="color-cat">
                                <select class="category-items" name="color" >
                                    <option value="1">Đen</option>
                                    <option value="2">Xanh Đen</option>
                                    <option value="3">Trắng Xanh</option>
                                    <option value="4">Đỏ Đen</option>
                                </select></div>
                            </div>
                            <div class="shop-buttons">
                                <h5 class="quantity">quantity:</h5>
                                <div id="quantity-wanted-p">
                                    <input type="number" value="1" name ="soluong"  class="cart-plus-minus-box">
                                    <div class="dec qtybutton">-</div>
                                    <div class="inc qtybutton">+</div>
                                    <span class="clearfix"></span>
                                </div>
                                <input type="submit" class="btn btn-danger" name="addcart" value="Thêm vào giỏ hàng">
                                <a href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-refresh"></i></a>
                               
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
                                        <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Miêu tả</a></li>
                       
                                        <li role="presentation"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">Đánh giá</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">                                    
                                    <li><?=$product_detail_by_id['descripsion'];?></li>
                                      <!--
                                       <ul>
                                           <li><i class="fa fa-circle"></i>Intel Core i9 7980XE Hyperthreaded Eighteen,
                                            Bộ xử lý cực ba mươi sáu luồng với khả năng ép xung ổn định tối đa có thể (Tối thiểu 4,6 GHz) với Waterblock CPU EK.</li>
                                           
                                           <li><i class="fa fa-circle"></i>Bộ nhớ bốn kênh DDR4 3200 MHz 128 GB</li>
                                           <li><i class="fa fa-circle"></i>2 x Thẻ đồ họa Nvidia RTX 2080Ti 11GB GDDR6 được cấu 
                                           hình trong SLI 3 chiều được trang bị khóa nước EK Full Cover và được ép xung để ép xung ổn định tối đa</li>
                                           <li><i class="fa fa-circle"></i>1x Samsung 970 PRO Polaris 1TB M.2 2280 PCI-e 3.0 x4 NVMe Solid State Drive 1 x 512GB Samsung 
                                           860 Pro Solid State Drive dưới dạng trò chơi phụ / ổ đĩa ứng dụng 1 x 1TB Samsung 860 Pro Solid State </li>
                                           <li><i class="fa fa-circle"></i>Lian Li D888WX Khung nhôm đầy đủ - Đen</li>
                                           <li><i class="fa fa-circle"></i>Cấu hình Watercooling Dual Loop tùy chỉnh</li>
                                           <li><i class="fa fa-circle"></i>Bảo hành thu thập và trả hàng 3 năm - Vương quốc Anh</li>
                                           <li><i class="fa fa-circle"></i>838mm x 675mm x 286mm</li>
                                          
                                       </ul>
                                       -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="specification">
                                        <p>Veniam quasi voluptatem facere nesciunt laborum, quibusdam amet totam fugit, blanditiis doloribus alias eveniet dolore pariatur dolores aliquid!</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex consectetur minima quod officiis magni, aspernatur. Ea consectetur ab in, consequatur alias, quo sit. Optio vitae cupiditate, consectetur veritatis cumque odio magnam voluptates voluptas eligendi, minima tenetur voluptatum dolor autem, doloribus expedita obcaecati.</p>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="review">
                                        <p>- Được xây dựng bằng tay Công cụ xây dựng chính được xếp hạng hàng đầu của OcUK và được điều chỉnh bởi Bộ ép xung số 1 thế giới.
                                            - Mỗi hệ thống 8Pack được đánh số và ký tên riêng.
                                            - Màu sắc tùy chỉnh và thông số kỹ thuật linh hoạt mà bạn có thể thảo luận với 8Pack trước khi đặt hàng.
                                            - Hỗ trợ hậu mãi chuyên dụng từ 8Pack mình.
                                            - Hai người chuyên giao hàng và lắp đặt.
                                            - Một PC hiệu năng cực kỳ đáng tin cậy cho những người yêu cầu tốt nhất tuyệt đối!</p>
                                       
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
                                                            <li><label>Tỉnh/TP:</label><span>'.$store['diachi'].'</span></li>
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