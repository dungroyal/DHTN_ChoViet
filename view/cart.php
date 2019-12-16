<style>
    
</style>
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
      <input type="number" value="<?= $sc['so_luong'] ?>" min="1" max="1">
    </div>
    <div class="product-removal">
      <button class="remove-product">
        Remove
    </button>
    </div>
    <div class="product-line-price"><?= number_format($sc['coin']) ?></div>
  </div>
  <?php endforeach ?>

  <div class="totals">
    <div class="totals-item">
      <label>Thành tiền</label>
      <div class="totals-value" id="cart-subtotal"><?= number_format($sc['coin']) ?>VNĐ</div>
    </div>
    <div class="totals-item">
      <label>Thuế VAT</label>
      <div class="totals-value" id="cart-tax">0</div>
    </div>
    <div class="totals-item">
      <label>Phí giao hàng</label>
      <div class="totals-value" id="cart-shipping">15.000 VNĐ</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Tổng cộng</label>
      <div class="totals-value" id="cart-total"><?= number_format($sc['coin']) ?>VNĐ</div>
    </div>
  </div>
  
  <div class="carhao">      
        <label>Họ và tên: <input type="text" name="name" id=""></label>
        <label for="">Email: <input type="email" name="email" id=""></label>
        <label for="">Địa chỉ: <input type="text" name="diachi" id=""></label>
        <label for="">Số điện thoại: <input type="text" name="sdt" id=""></label>
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
<!-- cart end -->
<script src = "http://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
charset = "utf-8" > </script>

<script type = "text/javascript" >
    $(document).ready(function() {

        /* Set rates + misc */
        var taxRate = 0.05;
        var shippingRate = 15.00;
        var fadeTime = 300;


        /* Assign actions */
        $('.product-quantity input').change(function() {
            updateQuantity(this);
        });

        $('.product-removal button').click(function() {
            removeItem(this);
        });


        /* Recalculate cart */
        function recalculateCart() {
            var subtotal = 0;

            /* Sum up row totals */
            $('.product').each(function() {
                subtotal += parseFloat($(this).children('.product-line-price').text());
            });

            /* Calculate totals */
            var tax = subtotal * taxRate;
            var shipping = (subtotal > 0 ? shippingRate : 0);
            var total = subtotal + tax + shipping;

            /* Update totals display */
            $('.totals-value').fadeOut(fadeTime, function() {
                $('#cart-subtotal').html(subtotal.toFixed(2));
                $('#cart-tax').html(tax.toFixed(2));
                $('#cart-shipping').html(shipping.toFixed(2));
                $('#cart-total').html(total.toFixed(2));
                if (total == 0) {
                    $('.checkout').fadeOut(fadeTime);
                } else {
                    $('.checkout').fadeIn(fadeTime);
                }
                $('.totals-value').fadeIn(fadeTime);
            });
        }


        /* Update quantity */
        function updateQuantity(quantityInput) {
            /* Calculate line price */
            var productRow = $(quantityInput).parent().parent();
            var price = parseFloat(productRow.children('.product-price').text());
            var quantity = $(quantityInput).val();
            var linePrice = price * quantity;

            /* Update line price display and recalc cart totals */
            productRow.children('.product-line-price').each(function() {
                $(this).fadeOut(fadeTime, function() {
                    $(this).text(linePrice.toFixed(2));
                    recalculateCart();
                    $(this).fadeIn(fadeTime);
                });
            });
        }


        /* Remove item from cart */
        function removeItem(removeButton) {
            /* Remove row from DOM and recalc cart total */
            var productRow = $(removeButton).parent().parent();
            productRow.slideUp(fadeTime, function() {
                productRow.remove();
                recalculateCart();
            });
        }

    });

</script>