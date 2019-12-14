    <!-- banner start -->
        <div class="banner-area home-two clearfix">
            <div class="banner-left-img hidden-xs">
                <?php
                    $show_banner_1=show_banner_one(1);
                    echo '<a href="'.$show_banner_1['url'].'" class="border-hover"><img src="uploads/'.$show_banner_1['image'].'" alt="'.$show_banner_1['title'].'"></a>';
                ?>
            </div>
            <div class="banner-rightside">
            <div class="single-banner-small small-one">
                <?php
                    $show_banner_2=show_banner_one(2);
                    echo '<a href="'.$show_banner_2['url'].'" class="border-hover"><img alt="'.$show_banner_2['title'].'" src="uploads/'.$show_banner_2['image'].'"></a>';
                ?>                
            </div>

            <div class="single-banner right">
                <?php
                    $show_banner_3=show_banner_one(3);
                    echo '<a href="'.$show_banner_3['url'].'" class="border-hover"><img alt="'.$show_banner_3['title'].'" src="uploads/'.$show_banner_3['image'].'"></a>';
                ?>  
            </div>

            <div class="single-banner left">
                <?php
                        $show_banner_4=show_banner_one(4);
                        echo '<a href="'.$show_banner_4['url'].'" class="border-hover"><img alt="'.$show_banner_4['title'].'" src="uploads/'.$show_banner_4['image'].'"></a>';
                    ?> 
            </div>
            <div class="single-banner-small small-two">
                <?php
                    $show_banner_5=show_banner_one(5);
                    echo '<a href="'.$show_banner_5['url'].'" class="border-hover"><img alt="'.$show_banner_5['title'].'" src="uploads/'.$show_banner_5['image'].'"></a>';
                ?>  
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
            <?php
                $show_banner_6=show_banner_one(6);
                echo '<a href="'.$show_banner_6['url'].'" class="border-hover"><img alt="'.$show_banner_6['title'].'" src="uploads/'.$show_banner_6['image'].'"></a>';
            ?> 
        </div>
        <div class="single-banner right">
          <?php
                $show_banner_7=show_banner_one(7);
                echo '<a href="'.$show_banner_7['url'].'" class="border-hover"><img alt="'.$show_banner_7['title'].'" src="uploads/'.$show_banner_7['image'].'"></a>';
            ?> 
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
                                                        <span class="new-price"><strong><?= number_format($pro['price']) ;?> ₫</strong></span>
                                                    </div>                                                    
                                                    <div class="new-sale">
                                                            <span><strong>
                                                            <?php                                                            
                                                                if($pro['product_status']==0){
                                                                    echo"Mới";
                                                                }
                                                                if($pro['product_status']==1){
                                                                    echo"Like New";
                                                                }
                                                                if($pro['product_status']==2){
                                                                    echo"Cũ";
                                                                }
                                                            ?>
                                                            </strong></span>
                                                        </div>
                                                </div>
                                                <div class="product-content text-center">
                                                    <h3><?= $pro['name'] ?> </h3>
                                                </div>
                                                
                                                <div class="product-action">      
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" title="Compage"><i class="fa fa-refresh"></i></a></li>
                                                            <li class="add-bag"><strong><a href="?act=product_detail&idProduct=<?= $pro['id'] ?>" >Xem chi tiết</a></strong></li>
                                                            <li><a href="#" data-toggle="tooltip" title="Like it!"><i class="fa fa-heart"></i></a></li>
                                                        </ul>
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