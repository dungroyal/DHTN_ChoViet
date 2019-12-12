<div class="padding-top-dangki"> </div>
<div class="login-popup">
  <div class="login-popup-conten">
    <div class="loginbox1"> 
      <h1>Đăng kí Chợ Việt</h1>
      <form action="?act=dangkitaikhoan" method="post">
        <p>Họ và tên: </p>
        <input name="fullname" type="text" placeholder="Họ và tên">
        
        <p>Tên đăng nhập:</p>
        <input type="text" name="username"   placeholder="Enter Username">

        <p>Email:</p>
        <input type="text" name="email" placeholder="Địa chỉ email">
        
        <p>Mật khẩu:</p>
        <input type="password" name="password" placeholder="Mật khẩu">

        <p>Mật lại khẩu:</p>
        <input type="password" name="repassword" placeholder="Nhập lại mật khẩu">

        <input type="submit" name="dangki_user" value="Đăng kí"  >
        <center>  
        <?php
          if(isset($erro)){
            echo $erro;
          }
          ?></center><br>
          
        <a href="#">Quên mật khẩu!</a><br>
        <a href="?act=loginuser">Đã có tài khoản Chợ Việt!</a><br>
        <a href="index.php">Trang chủ</a>

      </form>  
    </div>
    </div>
</div>
</div>