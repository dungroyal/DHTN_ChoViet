<div class="padding-top-dangki"> </div>
<div class="login-popup">
  <div class="login-popup-conten">
    <div class="loginbox1">
    <h1>Đăng kí Chợ Việt</h1>
    <form method="POST" action="?act=dangkitaikhoan" onsubmit="return checkForm(this);" autocomplete="off">
      <fieldset>
        <p>Họ và Tên <input title="Vui lòng nhập đầy đủ Họ và Tên" type="text" required minlength="6" name="hovsten"></p>

        <p>Số điện thoại</p>
          <input type="text" id="sdt" name="sdt" minlength="10" maxlength="10" required pattern="[0-9]{10}" title="Số điện thoại phải là số có 10 chữ số">

        <p>Thư điện tử</p>
        <input type="email" id="mail" name="mail" required>

        <p>Tên đăng nhập <input title="Tên đăng nhập tối thiểu 6 kí tự" type="text" required pattern="\w+"   required minlength="6" name="username"></p>

        <p>Mật khẩu <input title="Mật khẩu phải chứa ít nhất 6 ký tự, bao gồm chữ hoa / chữ thường và số" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="
          this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
          if(this.checkValidity()) form.pwd2.pattern = RegExp.escape(this.value);
        "></p>

        <p>Nhập lại mật khẩu <input title="Mật khẩu phải chứa ít nhất 6 ký tự, bao gồm chữ hoa / chữ thường và số" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" onchange="
          this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
        "></p>
        <input type="submit" id="submit" name="dk_user"value="Đăng kí">
        
        <a href="?act=loginuser">Đã có tài khoản!</a><br>
        <a href="index.php">Trang chủ</a>
      </fieldset>
    </form>    
    </div>
    </div>
                <?php
                  if (isset($_SESSION['thongbao'])) {
                    echo $_SESSION['thongbao'];
                  }
                ?>
</div>
</div>

<script>
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

  document.addEventListener("DOMContentLoaded", function() {

    // JavaScript form validation

    var checkPassword = function(str)
    {
      var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      return re.test(str);
    };

    var checkForm = function(e)
    {
      if(this.username.value == "") {
        alert("Error: Username cannot be blank!");
        this.username.focus();
        e.preventDefault(); // equivalent to return false
        return;
      }
      re = /^\w+$/;
      if(!re.test(this.username.value)) {
        alert("Error: Username must contain only letters, numbers and underscores!");
        this.username.focus();
        e.preventDefault();
        return;
      }
      if(this.pwd1.value != "" && this.pwd1.value == this.pwd2.value) {
        if(!checkPassword(this.pwd1.value)) {
          alert("The password you have entered is not valid!");
          this.pwd1.focus();
          e.preventDefault();
          return;
        }
      } else {
        alert("Error: Please check that you've entered and confirmed your password!");
        this.pwd1.focus();
        e.preventDefault();
        return;
      }
      alert("Both username and password are VALID!");
    };

    var myForm = document.getElementById("myForm");
    myForm.addEventListener("submit", checkForm, true);

    // HTML5 form validation

    var supports_input_validity = function()
    {
      var i = document.createElement("input");
      return "setCustomValidity" in i;
    }

    if(supports_input_validity()) {
      var usernameInput = document.getElementById("field_username");
      usernameInput.setCustomValidity(usernameInput.title);

      var pwd1Input = document.getElementById("field_pwd1");
      pwd1Input.setCustomValidity(pwd1Input.title);

      var pwd2Input = document.getElementById("field_pwd2");

      // input key handlers

      usernameInput.addEventListener("keyup", function(e) {
        usernameInput.setCustomValidity(this.validity.patternMismatch ? usernameInput.title : "");
      }, false);

      pwd1Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd1Input.title : "");
        if(this.checkValidity()) {
          pwd2Input.pattern = RegExp.escape(this.value);
          pwd2Input.setCustomValidity(pwd2Input.title);
        } else {
          pwd2Input.pattern = this.pattern;
          pwd2Input.setCustomValidity("");
        }
      }, false);

      pwd2Input.addEventListener("keyup", function(e) {
        this.setCustomValidity(this.validity.patternMismatch ? pwd2Input.title : "");
      }, false);

    }

  }, false);

</script>

</script>