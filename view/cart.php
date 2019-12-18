<?php
  if ((count(show_cart($_SESSION['iduserguest']))) <1) {
    header('location: ?act=home'); 
  }
?>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <ul class="breadcrumb">
                    <li><a href="index.php">Trang chủ</a><span> - </span></li>
                    <li class="active">Giỏ hàng của bạn</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<!-- cart start -->
<div class="shopping-cart">
 
  <div class="column-labels">
    <label class="product-image">Hình ảnh</label>
    <label class="product-details">Tên sản phẩm</label>
    <label class="product-price">Đơn giá</label>
    <label class="product-quantity">Số Lượng</label>
    <label class="product-removal">Xóa</label>
    <label class="product-line-price">Thành tiền</label>
  </div>

  <form method="post">
    <?php foreach(show_cart($_SESSION['iduserguest']) as $sc): ?>
  <div class="product">
    <div class="product-image">
      <img src="uploads/<?= $sc['img'] ?>">
    </div>
    <div class="product-details">
      <div class="product-title"><?= $sc['pro_name'] ?></div>
      <p class="product-description"><?= $sc['info'] ?> vnđ</p>
    </div>
    <div class="product-price"><?= number_format($sc['coin']) ?></div>
    <div class="product-quantity">
      <input type="number" value="<?= $sc['so_luong'] ?>" >
    </div>
    <div class="product-removal">
    <a class="remove-product" href="?act=cart&del=1&id=<?= $sc['id'] ?>">Xóa bỏ</a>
    </div>
    <div class="product-line-price"><?= number_format($sc['thanhtien']) ?></div>
  </div>
  <?php endforeach ?>

  <div class="totals">
    <div class="totals-item">
      <label>Thành tiền</label>
      <div class="totals-value" id="cart-subtotal"><?= number_format($sc['thanhtien']) ?> VNĐ</div>
    </div>
    <div class="totals-item">
      <label>Thuế VAT</label>
      <div class="totals-value" id="cart-tax">0 VNĐ</div>
    </div>
    <div class="totals-item">
      <label>Phí giao hàng</label>
      <div class="totals-value" id="cart-shipping">0 VNĐ</div>
    </div>
    <div class="totals-item">
      <label>Tổng cộng</label>
      <div class="totals-value" id="cart-shipping"><strong><?= number_format($sc['thanhtien']) ?></strong> VNĐ</div>
    </div>
  </div>
  
  <div class="carhao">
          <?$info_user=info_user($_SESSION['iduserguest']);?>
        <input type="hidden" name="name" value="<?=$info_user['fullname']?>">
        <input type="hidden" name="email" value="<?=$info_user['email']?>">
        <label class="label-cart" for="diachi">Địa chỉ: <input type="text" name="diachi" id="" placeholder="Hãy nhập địa chỉ nhận hàng của bạn!"></label>
        <input type="hidden" name="sdt" value="<?=$info_user['phonenumber']?>"></label>
        <input type="submit" name="muahang" value="Mua hàng" class="checkout">
    </div>
      </form>

      
      <center>
      <?php
      if(isset($erro)){
        echo $erro;
      }
      ?></center><br>   

  </div>
</div>