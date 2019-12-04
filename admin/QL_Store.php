      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>
          <li class="breadcrumb-item active">Quản lý cửa hàng</li>
        </ol>
        <?php
        if (isset($_GET['edi']) && ($_GET['edi'] == 1)) {
          $id = $_GET['id'];
          $storeone = store_one($id);
          ?>
          <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-folder-plus"></i>
                Cập nhật Cửa hàng <strong><?=$storeone['name']; ?></strong></div>
              <div class="card-body">

                <!-- Default form register -->
                <form class="text-center border border-light p-12" action="?act=QL_Catalog" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                  <input type="hidden" name="id" value="<?=$storeone['id']; ?>">
                        <label for="category">Trạng thái hoạt động của cửa hàng</label>
                        <select name="trangthai" class="custom-select tm-select-accounts" id="category">
                          <option selected value="0">
                          <?php
                            if ($storeone['trangthai']==1) {
                              echo'Chờ duy';
                            }elseif ($storeone['trangthai']==2) {
                              echo'Đã duyệt';
                            }else{
                              echo'Đã chặn';
                            }
                          ?>   
                        </option>
                          <option value="1">Chờ duyệt</option>
                          <option value="2">Đã duyệt</option>
                          <option value="3">Đã chặn</option>
                        </select>
                      </div>
                    <input class="btn btn-info my-1 btn-block" type="submit" name="capnhanstore" value="Cập nhật">
                  </form>
                  </div>
              </div>

          <?php } else {
            ?>
            <?php } ?>



            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="far fa-list-alt"></i>
                Danh sách chi tiết User</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Id Store</th>
                        <th>Tên cửa hàng</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>SĐT</th>
                        <th>Email</th>
                        <th>Hình ảnh</th>
                        <th>Địa chỉ</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      foreach ($storelist as $st) {
                        if ($st['trangthai']==1) {
                          $trangthai='"badge badge-warning">Chờ duyệt';
                        }
                        if ($st['trangthai']==2) {                          
                          $trangthai='"badge badge-primary">Đã duyệt';
                        }    
                        
                        if ($st['trangthai']==0) {                          
                          $trangthai='"badge"style="color: #ffffff;background-color: #c10707;">Đã chặn';
                        }   

                        echo '
                    <tr>
                    <td>' . $st['id'] . '</td>
                    <td><strong>' . $st['name'] . '</strong></td>
                    <td>' . $st['username'] . '</td>
                    <td>' . $st['password'] . '</td>
                    <td>' . $st['phonenumber'] . '</td>
                    <td>' . $st['email'] . '</td>
                    <td>' . $st['image'] . '</td>
                    <td>' . $st['diachi'] . '</td>
                    <td><span class=' . $trangthai . '</span></td>
                    <td>
                        <a href="?act=QL_Store&edi=1&id=' . $st['id'] . '"><i class="fas fa-pen-square"></i></a> &emsp;
                        <a href="?act=QL_Store&del=1&id=' . $st['id'] . '"><i class="fas fa-trash-alt" style="color: red;"></i></i></a>
                    </td>
                  </tr>
                    ';
                      }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="card-footer small text-muted">Mới cập nhật hồi nảy</div>
            </div>
            <p class="small text-center text-muted my-5">
              <em>Có chi mới là ghi ở đây nè ...</em>
            </p>

            </div>