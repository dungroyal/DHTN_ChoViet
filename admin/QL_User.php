      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>
          <li class="breadcrumb-item active">Quản lý danh mục thành viên</li>
        </ol>
        <?php
        if (isset($_GET['edi']) && ($_GET['edi'] == 1)) {
          $id = $_GET['id'];
          $productgone = product_one($id);
          ?>
          <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-folder-plus"></i>
                Thêm danh mục</div>
              <div class="card-body">

                <!-- Default form register -->
                <form class="text-center border border-light p-3" action="?act=QL_Catalog" method="post" enctype="multipart/form-data">
                  <div class="form-row mb-4" >
                    <div class="col">
                      <!-- First name -->
                      <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control" placeholder="Tên danh mục">
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                      <div class="custom-file mt-2 mb-2">
                        <input id="fileInput" type="file" name="image" style="display:none;" />
                        <input type="button" class="btn btn-primary btn-block mx-auto" value="Upload hình ảnh" onclick="document.getElementById('fileInput').click();" />
                      </div>
                    </div>
                    <!-- Sign up button -->
                    <input class="btn btn-info my-1 btn-block" type="submit" name="add_catalog" value="Thêm danh mục">
                  </div>
              </div>

          <?php } else {
            ?><div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-folder-plus"></i>
                Thêm tài khoản</div>
              <div class="card-body">

                <!-- Default form register -->
                <form class="text-center border border-light p-3" action="?act=QL_Catalog" method="post" enctype="multipart/form-data">
                  <div class="form-row mb-4" >
                    <div class="col">
                      <!-- First name -->
                      <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control" placeholder="Tên danh mục">
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                      <div class="custom-file mt-2 mb-2">
                        <input id="fileInput" type="file" name="image" style="display:none;" />
                        <input type="button" class="btn btn-primary btn-block mx-auto" value="Upload hình ảnh" onclick="document.getElementById('fileInput').click();" />
                      </div>
                    </div>
                    <!-- Sign up button -->
                    <input class="btn btn-info my-1 btn-block" type="submit" name="add_catalog" value="Thêm User">
                  </div>
              </div>
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
                        <th>ID User</th>
                        <th>Tên tài khoản</th>
                        <th>Pass</th>
                        <th>Email</th>
                        <th>Hình ảnh</th>
                        <th>Trạng thái</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      foreach ($userlist as $us) {
                        if ($us['lever']==0) {
                          $trangthai="Offline";
                        }elseif ($us['lever']==2) {                          
                          $trangthai="Online";
                        }
                        echo '
                    <tr>
                    <td>' . $us['id'] . '</td>
                    <td>' . $us['name'] . '</td>
                    <td>' . $us['pass'] . '</td>
                    <td>' . $us['email'] . '</td>
                    <td>' . $us['image'] . '</td>
                    <td>' . $trangthai . '</td>
                    <td>
                        <a href="?act=QL_User&edi=1&id=' . $us['id'] . '"><i class="fas fa-pen-square"></i></a> &emsp;
                        <a href="?act=QL_User&del=1&id=' . $us['id'] . '"><i class="fas fa-trash-alt" style="color: red;"></i></i></a>
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