      
      
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>
          <li class="breadcrumb-item active">Quản lý Banner <?=$location;?></li>
        </ol>

            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="far fa-list-alt"></i> Loại Banner</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" width="100%" cellspacing="1">
                    <thead>
                      <tr>
                        <th>Tiêu đề</th>
                        <th>Hình ảnh</th>
                        <th>Đường dẫn URL</th>
                        <th>Kích hoạt</th>
                        <th>Action</th>
                        
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        foreach ($banner_by_loca as $ban) {
                          echo'
                          <tr>
                            <td><strong>'.$ban['title'].'</strong></td>
                            <td><img src="uploads/'.$ban['image'].'" alt="" height="100px";></td>
                            <td>'.$ban['url'].'</td>
                            <td><a href=""><span class="badge badge-primary">Kích hoạt</span></a></td>
                            <td>
                              <a href="?act=QL_Product&edi=1&id=' . $ban['id'] . '"><i class="fas fa-pen-square"></i></a> &emsp;
                              <a href="?act=QL_Product&del=1&id=' . $ban['id'] . '"><i class="fas fa-trash-alt" style="color: red;"></i></i></a>
                          </td>
                          </tr>
                          ';
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>


              <div class="card-footer small text-muted">
                <center><img src="uploads/Map_banner.jpg" alt="" width="70%"></center>
            </div>
            </div>
            <p class="small text-center text-muted my-5">
            </p>

            </div>