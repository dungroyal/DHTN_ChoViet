<div class="padding-top-dangki"> </div>
<div class="login-popup">
  <div class="login-popup-conten">
    <div class="loginbox1"> 
      <h1>Đăng kí Chợ Việt</h1>
      <form action="?act=dangkitaikhoan" method="post">
        <p>Tiêu đề: </p>
        <input name="topic1" type="text" placeholder="Đăng kí tài khoản">
        
        <p>Tên đăng nhập:</p>
        <input type="text" name="name"   placeholder="Enter Username">

        <p>Email:</p>
        <input type="text" name="email" placeholder="Enter Email">
        
        <p>Mậtkhẩu:</p>
        <input type="password" name="" placeholder="Enter Password">

        <p>Mật lại khẩu:</p>
        <input type="password" name="" placeholder="Re Enter Password">

        <input type="submit" name="dangki" value="Đăng kí"  >
        <center>  
        <?php
          if(isset($erro)){
            echo $erro;
          }
          ?></center><br>
          
        <a href="#">Quên mật khẩu!</a><br>
        <a href="?act=loginuser">Đã có tài khoản Chợ Việt!</a>

      </form>  
    </div>
    </div>
</div>




</div>