<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Administrator</a>
    </li>
    <li class="breadcrumb-item active">Quản lý sản phẩm</li>
  </ol>

  <?php
if (isset($_GET['edi']) && ($_GET['edi'] == 1)) {
    $id = $_GET['id'];
    $productgone = product_one($id);
?>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-folder-plus"></i>
      Cập nhật sản phẩm: <strong><?=$productgone['name'];?></strong></div>
    <div class="card-body">
      <div class="container tm-mt-big tm-mb-big">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <div class="row tm-edit-product-row">
                <div class="col-xl-6 col-lg-6 col-md-12">


                  <form action="?act=QL_Product" method="post" class="tm-edit-product-form" enctype="multipart/form-data">

                  <input type="hidden" name="id" value="<?=$productgone['id']; ?>">

                    <div class="form-group mb-3">
                      <label for="name">Tên sản phẩm
                      </label>
                      <input id="name" name="name" type="text" placeholder="<?=$productgone['name'];?>" value="<?=$productgone['name'];?>" class="form-control validate" required />
                    </div>

                    <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label for="expire_date">Giá
                        </label>
                        <input id="number" name="price" type="number" placeholder="<?=$productgone['price'];?>" value="<?=$productgone['price'];?>" class="form-control validate" data-large-mode="true" />
                      </div>
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label for="stock">Số lượng
                        </label>
                        <input id="stock" name="soluong" type="number" placeholder="<?=$productgone['soluong'];?>" value="<?=$productgone['soluong'];?>" class="form-control validate" required />
                      </div>
                    </div>
                    <div class="form-group mb-3">
                      <label for="category">Đánh dấu là sản phẩm HOT?</label>
                      <select name="hot" class="custom-select tm-select-accounts" id="category">
                        <option selected value="0">Đánh dấu là sản phẩm hot ...</option>
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                      </select>
                    </div>
                      
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                        <div class="custom-file mt-2 mb-2">
                          <input id="fileInput" type="file" name="image" style="display:none;" />
                          <input type="button" class="btn btn-primary btn-block mx-auto" value="Upload hình ảnh" onclick="document.getElementById('fileInput').click();" />
                        </div>

                        <div class="form-group mb-3">
                          <label for="category">Danh mục</label>
                          <select name="idcatalog" class="custom-select tm-select-accounts" id="category">
                            <option selected>Chọn danh mục ...</option>
                              <?php
                                  foreach ($cataloglist as $cat) {
                                    echo'<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
                                  }
                              ?>
                        </select>
                      </div>
                      <div class="col-12">
                      <input type="submit" name="update_product" value="Cập nhật sản phẩm" class="btn btn-primary btn-block text-uppercase" id="backgroud_color">
                    </div>
                    </div>
                    
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php }else{
      ?>

<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-folder-plus"></i>
      Thêm sản phẩm</div>
    <div class="card-body">
      <div class="container tm-mt-big tm-mb-big">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <div class="row tm-edit-product-row">
                <div class="col-xl-6 col-lg-6 col-md-12">


                  <form action="?act=QL_Product" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                      <label for="name">Tên sản phẩm
                      </label>
                      <input id="name" name="name" type="text" class="form-control validate" required />
                    </div>

                    <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label for="expire_date">Giá
                        </label>
                        <input id="number" name="price" type="number" class="form-control validate" data-large-mode="true" />
                      </div>
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                        <label for="stock">Số lượng
                        </label>
                        <input id="stock" name="soluong" type="number" class="form-control validate" required />
                      </div>
                    </div>


                    <div class="form-group mb-3">
                      <label for="category">Đánh dấu là sản phẩm HOT?</label>
                      <select name="hot" class="custom-select tm-select-accounts" id="category">
                        <option selected value="0">Đánh dấu là sản phẩm hot ...</option>
                        <option value="1">Có</option>
                        <option value="0">Không</option>
                      </select>
                    </div>
                      
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                        <div class="custom-file mt-2 mb-2">
                          <input id="fileInput" type="file" name="image" style="display:none;" />
                          <input type="button" class="btn btn-primary btn-block mx-auto" value="Upload hình ảnh" onclick="document.getElementById('fileInput').click();" />
                        </div>

                        <div class="form-group mb-3">
                          <label for="category">Danh mục</label>
                          <select name="idcatalog" class="custom-select tm-select-accounts" id="category">
                            <option selected>Chọn danh mục ...</option>
                              <?php
                                  foreach ($cataloglist_by_store as $cat) {
                                    echo'<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
                                  }
                              ?>
                        </select>
                      </div>
                      <div class="col-12">
                      <input type="submit" name="add_product" value="Thêm sản phẩm" class="btn btn-primary btn-block text-uppercase">
                    </div>
                    </div>
                    
                </form>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php }?>
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