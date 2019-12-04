<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Administrator</a>
    </li>
    <li class="breadcrumb-item active">Quản lý sản phẩm</li>
  </ol>

    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="far fa-list-alt"></i> 
        Danh sách chi tiết sản phẩm</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>SL</th>
                <th>Hình ảnh</th>
                <th>VIEW</th>
                <th>HOT?</th>
                <th>Danh mục</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

              <?php
              foreach ($producttlist as $pro) {
                $name_catalog = get_catalog_name($pro['idCatalog']);
                echo '
                    <tr>
                    <td>' . $pro['id'] . '</td>
                    <td>' . $pro['name'] . '</td>
                    <td> $' . $pro['price'] . '</td>
                    <td>' . $pro['soluong'] . '</td>
                    <td><img src="uploads/' . $pro['image'] .'" width="100px"></td>
                    <td>' . $pro['view'] . '</td>
                    <td>' . $pro['hot'] . '</td>
                    <td>' . $name_catalog['name'] . '</td>
                    <td>
                        <a href="?act=QL_Product&edi=1&id=' . $pro['id'] . '"><i class="fas fa-pen-square"></i></a> &emsp;
                        <a href="?act=QL_Product&del=1&id=' . $pro['id'] . '"><i class="fas fa-trash-alt" style="color: red;"></i></i></a>
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
      <em>Có chi mới là ghi ở đây nề ...</em>
    </p>

  </div>