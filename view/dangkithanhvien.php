    <?php
    if (!isset($_SESSION['iduserguest'])) {        
        header('location:index.php?act=loginuser');
    }else {
        $info_user=info_user($_SESSION['iduserguest']);
        $name_user=$info_user['name'];
        $email_user=$info_user['email'];
    }
    ?>

    <div class="signup-form-dangki">
    <div class="signup-form-header-dangki"><strong>Đăng ký trở thành nhà báng hàng cùng với <a href="index.php">Chợ Việt</a></strong></div>
        <form action="?act=dangkithanhvien" method="post">
            <div class="checkin-dangki">
                <div>Số điện thoại liên hệ (&#42;):</div>                   
                <input type="text" name="phonenumber" value="" required>
            </div>

            <div class="checkin-dangki">
                <div>Tên shop (&#42;):</div>            
                <input type="text" name="namestore" required>
            </div>

            <div class="checkin-dangki">
                <div>Email liên hệ (&#42;):</div>            
                <input type="text" name="email" value="<?=$email_user;?>" required>
            </div>

            <div class="signup-form-button">
                <input type="submit" id="submitbtn" name="submitbtn_add_store"  value="Gửi thông tin">
                <button type="reset" id="submitbtn">Nhập lại</button>
            </div>
    </form> 
</div>

      
     