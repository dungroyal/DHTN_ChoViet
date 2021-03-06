      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>
          <li class="breadcrumb-item active">Quản lý cửa hàng của bạn</li>
        </ol>
        <?php          
        if(isset($_GET['edit']) && ($_GET['edit'] == 1)){
          $id = $_GET['id'];
          $catalogone = catalog_one($id);
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
          } else {} ?>


            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="far fa-list-alt"></i>
                Quản lý cửa hàng của bạn</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Tên cửa hàng</th>
                        <th>Ảnh đại diện</th>
                        <th>Địa chỉ</th>
                        <th>Ngày tham gia</th>
                        <th>Chỉnh sửa thông tin</th>
                      </tr>
                    </thead>

                      <tbody>
                            <tr>
                            <td><?=$info_store_admin['name'];?></td>
                            <td><img src="uploads/<?=$info_store_admin['image'];?>" width="100px"></td>
                            <td><?=$info_store_admin['diachi'];?></td>
                            <td><?=$info_store_admin['Date'];?></td>

                            <td>
                                <a href="?act=QL_Catalog&edit=1&id"><i class="fas fa-pen-square"></i></a> &emsp;
                            </td>
                          </tr>
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