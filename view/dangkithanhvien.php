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
        <input name="topic1" type="text" placeholder="VD: Nguễn Văn A" required>

        <p>Tên cửa hàng: </p>
        <input name="topic1" type="text" placeholder="VD: Văn A Shop" required>
        
        <p>Số điện thoại:</p>
        <input type="text" name="name"   placeholder="VD: 0123456789" required>

        <p>Số CMND:</p>
        <input type="text" name="cmdn"   placeholder="VD: 123123123" required>

        <p>Email:</p>
        <input type="text" name="email" placeholder="VD: email@gmail.com" required>

        <p>Số nhà, tên đường:</p>
        <input type="text" name="email" placeholder="01, Phạm Ngũ Lão" required>
        
        <p>Tỉnh, Thành phố:</p>
        <select id="input_select_dc" name="diachi">
            <option>TP. Hồ Chí Minh</option>
            <option>TP. Hà Nội</option>
            <option>TP. Đà Nẵng</option>
        </select>

        <p>Quận, huyện:</p>
        <select id="input_select_dc" name="diachi">
            <option>Gò vấp</option>
            <option>Tân Bình</option>
        </select>        

        <input type="submit" name="dangkicuahang" value="Gửi thông tin">
      </form>  
    </div>
    </div>
</div>
</div>
      
     