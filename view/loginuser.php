<div class="loginbox1"> 
  <h1>Đăng nhập Chợ Việt</h1>
  <form action="index.php?act=loginuser" method="post">
    <p>Tên đăng nhập:</p>
    <input type="text" name="user" placeholder="Enter Username">
    <p>Mật khẩu:</p>
    <input type="password" name="pasword" placeholder="Enter Password">   
    
    <input type="submit" name="dang_nhap_user" value="Đăng nhập">  

    <?php
        if (isset($_POST['dang_nhap_user']) && $_POST['dang_nhap_user']) {
          $user = $_POST['user'];
          $pass = $_POST['pasword'];

          $kt_user = check_user($user, $pass);          

          $id_user=$kt_user['id'];
          $lever=$kt_user['lever'];
              
          if (($id_user > 0) && ($lever==0)) {
            $_SESSION['iduserguest'] = $id_user;
            header('Location: index.php');
          }

        }else{
          echo'<a href="#"><strong> Sai Tên đăng nhập hoặc mật khẩu</strong></a><br>';
        }
    ?>


    <a href="#">Quên mật khẩu!</a><br>
    <a href="?act=dangkitaikhoan">Đăng kí tài khoản!</a>
  </form>
</div>
</div>