      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>
          <li class="breadcrumb-item active">Quản lý danh mục sản phẩm</li>
        </ol>
        <?php          
        if(isset($_GET['edit']) && ($_GET['edit'] == 1)){
          $id = $_GET['id'];
          $catalogone = catalog_one($id);
          
          echo 'Test:'.$catalogone['id'];
          ?>
          <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-folder-plus"></i>
                Sửa sản phẩm : <strong><?=$catalogone['name'];?></strong>
              </div>
              <div class="card-body">

                <!-- Default form register -->
                <form class="text-center border border-light p-3" action="?act=QL_Catalog" method="post" enctype="multipart/form-data">
                  <div class="form-row mb-4" >
                    <div class="col">
                      <input type="hidden" name="id" value="<?=$catalogone['id']?>">
                      <!-- First name -->
                      <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control" placeholder="<?=$catalogone['name'];?>">
                    </div>
                    
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                        <input id="fileInput" type="file" name="image"/>
                    </div>
                    <!-- Sign up button -->
                    <input class="btn btn-info my-1 btn-block" type="submit" name="update_catalog" value="Sửa danh mục">
                  </div>
                </form>
                </div>
              </div>

          <?php 
          } else {
            ?><div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-folder-plus"></i>
                Thêm danh mục</div>
              <div class="card-body">

                <!-- Default form register -->
                <form class="text-center border border-light p-3" action="?act=QL_Catalog" method="post" enctype="multipart/form-data">
                  <div class="form-row mb-4" >

                  <div class="form-group mb-3">
                          <select name="idcatalog" class="custom-select tm-select-accounts" id="category">
                            <option selected>Chọn danh mục ...</option>
                              <?php
                                  foreach ($cataloglist as $cat) {
                                    echo'<option value="'.$cat['id'].'">'.$cat['name'].'</option>';
                                  }
                              ?>
                        </select>
                      </div>

                    <div class="col">
                      <!-- First name -->
                      <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control" placeholder="Viết lại tên danh mục" required>
                    </div>

                   

                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                        <input id="fileInput" type="file" required name="image"/>
                    </div>
                    <!-- Sign up button -->
                    <input class="btn btn-info my-1 btn-block" type="submit" name="add_catalog" value="Thêm danh mục">
                  </div>
                </form>
              </div>
              </div>
            <?php } ?>


            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="far fa-list-alt"></i>
                Danh sách chi tiết danh mục</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Hình ảnh</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                      foreach ($cataloglist_by_store as $cat) {
                        echo '
                    <tr>
                    <td>' . $cat['id'] . '</td>
                    <td>' . $cat['name'] . '</td>
                    <td><img src="uploads/' . $cat['image'] . '" width="100px"></td>
                    <td>
                        <a href="?act=QL_Catalog&edit=1&id='.$cat['id'].'"><i class="fas fa-pen-square"></i></a> &emsp;
                        <a href="?act=QL_Catalog&del=1&id='.$cat['id'].'"><i class="fas fa-trash-alt" style="color: red;"></i></i></a>
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