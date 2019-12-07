      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>
          <li class="breadcrumb-item active">Quản Banner Trang Chủ</li>
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
                        <th>Loại Banner</th>
                        <th>Số lượng</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        for ($i=1; $i<=7 ; $i+1) {
                          $cout_banner=count(banner_by_loca($i));
                          echo'
                          <tr>
                            <td><strong>Banner '.$i.'</strong></td>
                            <td>'.$cout_banner.'</td>
                            <td><a href="?act=QL_Banner_by_location&location='.$i.'"><span class="badge badge-primary">Quản lý Banner '.$i.'</span></a></td>
                          </tr>
                          ';
                          $i+=1;
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