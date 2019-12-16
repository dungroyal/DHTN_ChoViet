<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Administrator</a>
    </li>
    <li class="breadcrumb-item active">Quản lý sản phẩm</li>
  </ol>

  <?php
          if(isset($_GET['add']) && ($_GET['add'] == 1)){
            echo'
            <a href="admin-store.php?act=QL_Product" class="btn btn-success btn-floated close-box"><i class="fa fa-plus"></i></a>
            ';
          }else {
            echo'
            <a href="admin-store.php?act=QL_Product&add=1" class="btn btn-success btn-floated"><i class="fa fa-plus"></i></a>
            ';
          }

          ?>

  <?php
if (isset($_GET['edi']) && ($_GET['edi'] == 1)) {
    $id = $_GET['id'];
    $productgone = product_one($id);
    ?><div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="form-horizontal">                      
                  <form action="admin-store.php?act=QL_Product" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$bannerone['id'];?>">
                  <fieldset>
                        <legend>Chỉnh sửa Sản phẩm "<strong><?=$bannerone['title'];?>"</strong> </legend>
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
                    <form action="admin-store.php?act=QL_Product" method="post" enctype="multipart/form-data">
                    <fieldset>
                          <legend>Thêm sản phẩm</legend>
                          <div class="form-group row">
                              <label class="col-form-label col" for="Title">Tên sản phẩm</label>
                              <div class="col-md-12">
                                  <input class="form-control text-box single-line" data-val="true" required data-val-length="The field Tiêu đề must be a string with a maximum length of 250." data-val-length-max="250" id="Title" name="name" type="text" value="">
                                  <span class="field-validation-valid text-danger" data-valmsg-for="Title" data-valmsg-replace="true"></span>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label class="col-form-label col" for="Title">Mô tả chi tiết</label>
                              <div class="col-md-12">
                                <textarea id="editor1" name="title" cols="80" rows="10">
                                </textarea>                                
                                <script>                          
                                    CKEDITOR.replace( 'editor1', {
                                          uiColor: '#99ffff'} );                          
                                </script>   
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="Package">Số lượng</label>
                                        <input type="number" class="form-control" id="" name="soluong"></input>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="Package">Tình trạng sản phẩm</label>
                                        <select class="form-control" data-val="true" data-val-required="The Trạng thái field is required." id="Status" name="product_status">
                                              <option selected="selected" value="0">Mới 100%</option>
                                              <option value="1">Like New</option>
                                              <option value="2">Đã qua sử dụng</option>
                                        </select>
                                     </div>
                                </div>
                            </div>
                        </div>

                          <div class="form-group row">
                              <label class="col-form-label col" for="Title">Thông số kĩ thuật</label>
                              <div class="col-md-12">
                                <textarea id="editor2" name="specifications" cols="80" rows="10">
                                </textarea>                              
                                  <script>
                                      CKEDITOR.replace( 'editor2', {
                                          uiColor: '#99ffff',
                                          toolbar: [
                                              [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
                                              [ 'FontSize', 'TextColor', 'BGColor' ]
                                          ]
                                      });                            
                                  </script>
                              </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="Package">Quy cách đóng gói</label>
                                        <textarea class="form-control" cols="20" id="Package" name="package" rows="3"></textarea>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Package" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="Warranty">Thông tin bảo hành</label>
                                        <textarea class="form-control" cols="20" id="Warranty" name="warranty" rows="3"></textarea>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Warranty" data-valmsg-replace="true"></span>
                                    </div>
                                </div>
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
                          <label class="col-form-label col" for="Image">Ảnh đại diện</label>
                          <div class="col-md-12">
                            <div class="custom-file mt-2 mb-2">
                              <div class="popup-example">
                                <button id="ckfinder-popup" class="uploadfile btn btn-secondary" style="float: left">Chọn ảnh</button>
                                                            
                            </div>
                          </div>
                            <div id="preview">
                                  <span id='output'></span>
                                </div> 
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-form-label col" for="Status">Thương hiệu</label>
                          <div class="col-md-12">
                              <select class="form-control" data-val="true" data-val-required="The Trạng thái field is required." id="brand" name="brand">
                              <option selected="selected" disabled>Lựa chọn thương hiệu</option>
                                <option value="1">:)</option>
                                </select>
                              <span class="field-validation-valid text-danger" data-valmsg-for="Status" data-valmsg-replace="true"></span>
                          </div>
                      </div>

                      <div class="form-group row">
                          <label class="col-form-label col" for="Status">Danh mục</label>
                          <div class="col-md-12">
                              <select class="form-control" data-val="true" data-val-required="The Trạng thái field is required." id="idcatalog" name="idcatalog">
                                <?php
                                  foreach ($cataloglist_by_store as $cat) {
                                    echo'
                                    <option value="'.$cat['idCatalog'].'">'.$cat['name'].'</option>
                                    ';
                                  }
                                ?>
                                </select>
                              <span class="field-validation-valid text-danger" data-valmsg-for="Status" data-valmsg-replace="true"></span>
                          </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-form-label col" for="Status">Trạng thái</label>
                          <div class="col-md-12">
                              <select class="form-control" data-val="true" data-val-required="The Trạng thái field is required." id="Status" name="status">
                                <option selected="selected" value="0">Lưu tạm</option>
                                <option value="1">Đang bán</option>
                                </select>
                              <span class="field-validation-valid text-danger" data-valmsg-for="Status" data-valmsg-replace="true"></span>
                          </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-12">
                            <label for="Price">Giá bán</label>
                            <div class="input-group">
                                <input class="form-control text-box single-line" data-val="true" data-val-number="The field Price must be a number." data-val-required="Vui lòng nhập giá bán." id="Price" name="price" type="text" value="">
                                <label class="input-group-append">
                                    <span class="badge">vnđ</span>
                                </label>
                            </div>
                            <span class="field-validation-valid text-danger" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                        </div>
                    </div>

                      <div class="form-group row">
                        <div class="col-md-12">
                            <label for="SpecialPrice">Giá ưu đãi</label>
                            <div class="input-group">
                                <input class="form-control text-box single-line" data-val="true" data-val-number="The field SpecialPrice must be a number." id="SpecialPrice" name="specialprice" type="text" value="">
                                <label class="input-group-append">
                                    <span class="badge">vnđ</span>
                                </label>
                            </div>
                            <span class="field-validation-valid text-danger" data-valmsg-for="SpecialPrice" data-valmsg-replace="true"></span>
                        </div>
                    </div>    
                    <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="IsFeatured" name="IsFeatured" placeholder="Product tags..." type="checkbox" value="true"><input name="IsFeatured" type="hidden" value="false">
                                        <label class="custom-control-label" for="IsFeatured">Đánh dấu sản phẩm nổi bật (Hot)</label>
                                    </div>
                                </div>
                            </div>
                      <input type="submit" value="Thêm sản phẩm" name="store_add_product" class="btn btn-primary">
                      <a class="btn btn-default" href="admin-store.php?act=QL_Product">Cancel</a>
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
              foreach ($producttlist_by_store as $pro) {
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


  <div class="modal-example">
					<button id="ckfinder-modal" class="button-a button-a-background" style="float: left">Open Modal</button>
					<div id="output" style="float: left;font-size: 0.8em;line-height: 1.4em;margin: 3px 7px;"></div>
        </div>
        <img src="" alt="Preview">

        <script>                                                         
            function escapeHtml(unsafe) {
                return unsafe
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }        

            var button = document.getElementById('ckfinder-popup');

            button.onclick = function() {
                CKFinder.popup({
                    chooseFiles: true,
                    width: 800,
                    height: 600,
                    onInit: function(finder) {
                        finder.on('files:choose', function(evt) {
                            var file = evt.data.files.first();
                            var output = document.getElementById('output');
                            output.innerHTML = '<img src="'+escapeHtml(file.getUrl())+'" alt="Hình ảnh" class="preview-img">';
                        });

                        finder.on('file:choose:resizedImage', function(evt) {
                            var output = document.getElementById('output');
                            output.innerHTML = 'Selected resized image: ' + escapeHtml(evt.data.file.get('name')) + '<br>url: ' + escapeHtml(evt.data.resizedUrl);
                        });
                    }
                });
            };
        </script>

        <img class="preview" src="" alt="" width="100px">