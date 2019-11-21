<body id="body">
	  <form action="xulydangky.php" method="post" enctype="multipart/form-data">
	    <div id="nen">
	      <div id="img">
	        <img src="img-login1.png" widht="900" height="200"/></em>
	        <em>
	      </div>
	      <div id="dk">
        <div id="nd">
	          <table width="900px">
	            <tr>
	              <div class="tt">
	                <td widht="200"><label for="nn">Họ Tên (<span style="kihieu">*</span>)</label></td>
	                <td width="400" ><input type="text" name="hoten" class="input1"/>
	              </div>
	              </td>
	        </div>
	        </tr>
	        <tr>
	        <div class="tt">
	        <td widht="200"><label for="nn">Tên Đăng Nhập (<span style="kihieu">*</span>) </label></td>
	        <td width="400" ><input type="text" name="tdn" class="input1"/></div>
	        <!--<p class="xacnhanten">Ten dang nhap da ton ta.</p>-->
	        </td>	      </div>
	      </tr>
	      <tr>
	      <div class="tt">
	      <td widht="200"><label for="nn">Mật Khẩu (<span style="kihieu">*</span>) </label></td>
	      <td width="400" ><input type="password" name="mk" class="input1"/></div></td>
	    </div>
	    </tr>
	    <tr>
	    <div class="tt">
	    <td width="200" ><label for="nn">Xác nhận mật khẩu (<span style="kihieu">*</span>)</label></td>
	    <td width="400" ><input type="password" name="xnmk" class="input1"/></div>
	    <!-- <p class="xacnhanten">Ten dang nhap da ton ta.</p>-->
	    </td>
	    </div>
	    </tr>
	    <tr>
	    <div class="tt">	    <td width="200" ><label for="nn">Giới Tính: </label></td>
	    <td width="400" ><span style="font-size:20px;color:#000;margin-left:36px;padding:5px 5px;"><input type="radio" name="gioitinh" value="1" checked="checked"/>Nam
	    <input type="radio" name="gioitinh" value="0" />Nu</span>
	    </td>
	    </div>
	    </tr>
	    <tr>	    <div class="tt">
	    <td width="200" ><label for="nn">Email: </label></td>
	    <td width="400" ><input type="text" name="email" class="input1"/></td>
	    </div>	    </tr>
	    <tr>
	    <div class="tt">
	    <td width="200" ><label for="nn">Địa Chỉ </label></td>	    <td width="400" ><textarea name="diachi" style="font-size: 20px; color: rgb(0, 0, 0); margin-left: 38px; padding: 5px; width: 250px; height: 54px;font-family: serif"></textarea></td>
	    </div>
	    </tr>
	    <tr>
	    <div class="tt">
	    <td width="200" ><label for="nn">Thông Tin Điều Khoản</label></td>
	    <td width="400" ><div id="hide">
	    <input type="button" value="Hide" class="hide" style="font-size:15px;color:#000;margin-left:36px;padding:2px 0px;"/>
	    <input type="button" value="Show" class="show" style="font-size:15px;color:#000;padding:2px 0px;"/>
	    </div>
	    <div id="tt-dkhoan">
	    <input type="button" id="dieukhoan" value="Đọc điêu khoản" style="font-size:15px;color:#000;margin-left:36px;padding:2px 2px;"/></br>
	    </div>
	    <span style="font-size:20px;color:#000;margin-left:36px;padding:5px 5px;"><input type="checkbox" value="xacnhan_dk" name="xacnhan_dieukhoan" />Tôi chấp nhận điều khoản.</span>
	    </td>	    </div>
74	    </tr>
	    <tr>
76	    <div class="tt">
77	    <td colspan="2" align="center"><input type="submit" name="xn" class="nut" value="Đăng Ký">
78	    <input type="reset" name="huy" class="nut" value="Hủy"/></td>
79	    </div>
80	    </tr>
81	    </table>
82	    </div>
83	    </div><!--ket thuc dk-->
84	    </div><!---ket thuc nen-->
85	  </form>
86	</body>
