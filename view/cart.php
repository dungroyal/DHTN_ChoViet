<style>
body {
  font-family: Arial;
  font-size: 17px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px; 
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #000000;
  
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a><span> - </span></li>
                    <li class="active">shopping cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->
<!-- cart start -->
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post" action="model/sendmailcart.php">
      
        <div class="row">
          <div class="col-50">
            <h3 style="color:white">Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Họ và tên</label>
            <input type="text"  name="name" placeholder="Lê Nhật Hào">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text"  name="email" placeholder="lenhathao3112@gmail.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ</label>
            <input type="text"  name="address" placeholder="334 Chu Văn An, P12, Q.Bình Thạnh">
            <label for="city"><i class="fa fa-institution"></i> Thành phố</label>
            <input type="text"  name="city" placeholder="Hồ Chí Minh">

            <div class="row">
              <div class="col-50">
                <label for="state">Quận, Huyện</label>
                <input type="text"  name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Tiêu Đề</label>
                <input type="text"  name="topic" placeholder="Mua Hàng">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3 style="color:white">Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Tên chủ thẻ</label>
            <input type="text"  name="cardname" placeholder="LE NHAT HAO">
            <label for="ccnum">Số thẻ tín dụng</label>
            <input type="text"  name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Tháng hết hạn</label>
            <input type="text"  name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Năm háng hạn</label>
                <input type="text"  name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">Code</label>
                <input type="text"  name="cvv" placeholder="CV352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Địa chỉ giao hàng giống như thanh toán
        </label>
        <input type="submit" name="btn_submit" value="THANH TOÁN" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4 style="color:white">Images - Cart <span class="price" style="color:white"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Image 1</a> - <a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Image 2</a> - <a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Image 3</a> - <a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Image 4</a> - <a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p style="color:white">Total <span class="price" style="color:white"><b>$30</b></span></p>
    </div>
  </div>
</div>
<!-- cart end -->