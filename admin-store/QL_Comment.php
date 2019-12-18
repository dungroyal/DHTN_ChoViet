      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>
          <li class="breadcrumb-item active">Quản lý Comment</li>
        </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="far fa-list-alt"></i>
                Danh sách bình luận</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Sản Phẩm</th>
                        <th>Tên tài khoản</th>
                        <th>Đánh giá</th>
                        <th>Nội dung</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      foreach ($commentlist_store as $com) {
                        $Get_product= info_product($com['idProduct']);
                        echo '
                    <tr>
                    <td><center><img src="uploads/' . $Get_product['image'] . '" width="100px" alt=""></center></td>
                    <td>' . $com['name'] . '</td>
                    <td>' . $com['danhgia'] . ' sao</td>
                    <td>' . $com['noidung'] . '</td>
                    <td>
                        <a href="?act=QL_Comment&edi=1&id=' . $com['id'] . '"><i class="fas fa-pen-square"></i></a> &emsp;
                        <a href="?act=QL_Comment&del=1&id=' . $com['id'] . '"><i class="fas fa-trash-alt" style="color: red;"></i></i></a>
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