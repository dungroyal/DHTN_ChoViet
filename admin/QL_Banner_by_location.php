 
        <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Administrator</a>
          </li>          
          <li class="breadcrumb-item active">Quản lý Banner <?=$location;?></li>
        </ol>       

          <?php
          if(isset($_GET['add']) && ($_GET['add'] == 1)){
            echo'
            <a href="?act=QL_Banner_by_location&location='.$location.'" class="btn btn-success btn-floated close-box"><i class="fa fa-plus"></i></a>
            ';
          }else {
            echo'
            <a href="?act=QL_Banner_by_location&location='.$location.'&add=1" class="btn btn-success btn-floated"><i class="fa fa-plus"></i></a>
            ';
          }

          ?>

        <?php          
        if(isset($_GET['edi']) && ($_GET['edi'] == 1)){
          $id = $_GET['id'];
          $bannerone = banner_one($id);
          ?><div class="row">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-body">
                          <div class="form-horizontal">                      
                            <form action="?act=QL_Banner_by_location&location=<?=$location;?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?=$bannerone['id'];?>">
                            <fieldset>
                                  <legend>Chỉnh sửa banner "<strong><?=$bannerone['title'];?>"</strong> </legend>
                                  <div class="form-group row">
                                      <label class="col-form-label col" for="Title">Tiêu đề</label>
                                      <div class="col-md-12">
                                          <input class="form-control text-box single-line" data-val="true" data-val-length="The field Tiêu đề must be a string with a maximum length of 250." data-val-length-max="250" id="Title" name="title" type="text" value="<?=$bannerone['title'];?>">
                                          <span class="field-validation-valid text-danger" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                                      </div>
                                  </div>
      
                                  <div class="form-group row">
                                      <label class="col-form-label col" for="Title">Đường dẫn URL</label>
                                      <div class="col-md-12">
                                          <input class="form-control text-box single-line" data-val="true" data-val-length="The field Tiêu đề must be a string with a maximum length of 250." data-val-length-max="250" id="Title" name="url" type="text" value="<?=$bannerone['url'];?>">
                                          <span class="field-validation-valid text-danger" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                                      </div>
                                  </div>
                              </fieldset>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card">
                      <div class="card-body">
                          <fieldset>
                              <legend>Tùy chọn</legend>
                              <div class="form-group row">
                                  <label class="col-form-label col" for="Image">Hình đại diện</label>
                                  <div class="col-md-12">                                    
                                      <input id="fileInput" type="file" name="image" style="display:none;" >
                                      <input type="button" class="uploadfile btn btn-secondary" value="Upload hình ảnh" onclick="document.getElementById('fileInput').click();" />
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-form-label col" for="Status">Trạng thái</label>
                                  <div class="col-md-12">
                                    <?php
                                      if ($bannerone['status']==1) {
                                        $status1='selected="selected"';
                                        $status2='';
                                      }else{                                        
                                        $status2='selected="selected"';
                                        $status1='';
                                      }
                                    ?>
                                      <select class="form-control" data-val="true" data-val-required="The Trạng thái field is required." id="Status" name="status">
                                        <option <?=$status2;?> value="0">Ẩn khỏi trang chủ</option>
                                        <option <?=$status1;?> value="1">Kích hoạt</option>
                                        </select>
                                      <span class="field-validation-valid text-danger" data-valmsg-for="Status" data-valmsg-replace="true"></span>
                                  </div>
                              </div>
                              <input type="submit" value="Lưu thây đổi" name="update_banner" class="btn btn-primary">
                              <a class="btn btn-default" href="?act=QL_Banner_by_location&location=<?=$location;?>">Cancel</a>
                          </fieldset>
                        </form>
                      </div>
                  </div>
              </div>
          </div>

          <?php
          } elseif (isset($_GET['add']) && ($_GET['add'] == 1)) {
            ?>
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-horizontal">                      
                              <form action="?act=QL_Banner_by_location&location=<?=$location;?>" method="post" enctype="multipart/form-data">
                              <fieldset>
                                    <legend>Thêm Banner <?=$location;?></legend>
                                    <div class="form-group row">
                                        <label class="col-form-label col" for="Title">Tiêu đề</label>
                                        <div class="col-md-12">
                                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field Tiêu đề must be a string with a maximum length of 250." data-val-length-max="250" id="Title" name="title" type="text" value="">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col" for="Title">Đường dẫn URL</label>
                                        <div class="col-md-12">
                                            <input class="form-control text-box single-line" data-val="true" data-val-length="The field Tiêu đề must be a string with a maximum length of 250." data-val-length-max="250" id="Title" name="url" type="text" value="">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <fieldset>
                                <legend>Tùy chọn</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col" for="Image">Hình ảnh</label>
                                    <div class="col-md-12">
                                      <div class="custom-file mt-2 mb-2">
                                        <input id="fileInput" type="file" name="image" style="display:none;" >
                                        <input type="button" class="uploadfile btn btn-secondary" value="Upload hình ảnh" onclick="document.getElementById('fileInput').click();" />
                                      </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col" for="Status">Trạng thái</label>
                                    <div class="col-md-12">
                                        <select class="form-control" data-val="true" data-val-required="The Trạng thái field is required." id="Status" name="status">
                                          <option selected="selected" value="0">Lưu tạm</option>
                                          <option value="1">Hiển thị trên trang chủ</option>
                                          </select>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Status" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                                <input type="submit" value="Thêm banner" name="add_banner" class="btn btn-primary">
                                <a class="btn btn-default" href="?act=QL_Banner_by_location&location=<?=$location;?>">Cancel</a>
                            </fieldset>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
          }else {
            ?>
            <?php } ?>

            <!-- DataTables Example -->
            <div class="card mb-3">
              <div class="card-header">
                <i class="far fa-list-alt"></i> Danh sách Banner <?=$location;?></div>
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
                          $trangthai='';
                          if ($ban['status']==0) {                          
                            $trangthai='"badge"style="color: #ffffff;background-color: #c10707;">Đã Ẩn';
                          }
                          if ($ban['status']==1) {
                            $trangthai='"badge badge-warning">Đã kích hoạt';
                          }                          
                          echo'
                          <tr>
                            <td><strong>'.$ban['title'].'</strong></td>
                            <td><img src="uploads/'.$ban['image'].'" alt="" height="150px";></td>
                            <td><a href="'.$ban['url'].'">'.$ban['url'].'</a></td>
                            <td><span class=' . $trangthai . '</span></td>
                            <td>
                              <a href="?act=QL_Banner_by_location&location='.$ban['location'].'&edi=1&id=' . $ban['id'] . '"><i class="fas fa-pen-square"></i></a> &emsp;
                              <a href="?act=QL_Banner_by_location&location='.$ban['location'].'&del=1&id=' . $ban['id'] . '"><i class="fas fa-trash-alt" style="color: red;"></i></i></a>
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