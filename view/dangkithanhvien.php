    <?php
    if (!isset($_SESSION['iduserguest'])) {        
        header('location:index.php?act=loginuser');
    }else {
        $info_user=info_user($_SESSION['iduserguest']);
        $name_user=$info_user['name'];
        $email_user=$info_user['email'];
    }
    ?>

<div class="padding-top-dangki-dk"> </div>
<div class="login-popup-dk">
  <div class="login-popup-conten-dk">
    <div class="loginbox1"> 
      <h1><strong>Đăng kí</strong> nhà bán hàng trên <strong>Chợ Việt</strong></h1>
      <form action="?act=dangkitaikhoan" method="post">
        <p>Họ và Tên: </p>
        <input name="topic1" type="text" placeholder="VD: Nguễn Văn A" required  minlength="6">

        <p>Tên cửa hàng: </p>
        <input name="topic1" type="text" placeholder="VD: Văn A Shop" required minlength="6">
        
        <p>Số điện thoại:</p>
        <input type="text" name="name"   placeholder="VD: 0123456789" minlength="10" maxlength="10" required pattern="[0-9]{10}" title="Số điện thoại phải là số có 10 chữ số">

        <p>Số CMND:</p>
        <input type="text" name="cmdn"   placeholder="VD: 123123123" minlength="9" maxlength="12" required pattern="[0-9]{9}" title="Số CMND là số có 9 hoặc 12 chữ số">

        <p>Thư điện tử</p>
        <input type="email" id="mail" name="email" required placeholder="VD: email@gmail.com">

        
        <p>Tỉnh, Thành phố:</p>
        <select id="thanhpho" name="thanhpho" required>
          <option selected="selected" disabled>Chọn Thành Phố</option>
          <?php
            $DS_thanhpho=list_thanhpho();
            foreach ($DS_thanhpho as $tp) {
              echo'
              <option value="'.$tp['matp'].'">'.$tp['name'].'</option>
              ';
            }
          ?>
        </select>
        <p>Quận, huyện:</p>
        <select id="quanhuyen" name="quanhuyen" required>
          <option selected="selected" disabled>Chọn Quận Huyện</option>
        </select>    
        <p>Phường, xã:</p>
        <select id="phuongxa" name="phuongxa" required>
          <option selected="selected" disabled>Chọn Phường Xã</option>
        </select>    
        
        <p>Số nhà, tên đường:</p>
        <input type="text" name="sonha" placeholder="992 Âu Cơ" required minlength="6">

        <input type="submit" name="dangkicuahang" value="Gửi thông tin">
        <a href="index.php">Trở lại Trang chủ</a>
      </form>  
    </div>
    </div>
</div>
</div>

<script>
          jQuery(document).ready(function($){
            $("#thanhpho").change(function(event){
              cityID=$("#thanhpho").val();              
              $.post("view/quanhuyen.php",{"cityID":cityID},function(data) {
                $("#quanhuyen").html(data);
              })              
            })
            $("#quanhuyen").change(function(event){
              wardID=$("#quanhuyen").val();              
              $.post("view/phuongxa.php",{"wardid":wardID},function(data) {
                $("#phuongxa").html(data);
              })              
            })
          });


          
var form  = document.getElementsByTagName('form')[0];
var email = document.getElementById('mail');
var error = document.querySelector('.error');

email.addEventListener("input", function (event) {
  if (email.validity.valid) {
    error.innerHTML = "";
    error.className = "error";
  }
}, false);
form.addEventListener("submit", function (event) {
  if (!email.validity.valid) {
    error.innerHTML = "I expect an e-mail, darling!";
    error.className = "error active";
    event.preventDefault();
  }
}, false);
        </script>
      
     