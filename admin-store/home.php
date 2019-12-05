<div class="container-fluid">
    <header class="page-title-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="/Admin/Products"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Sản phẩm</a>
                </li>
            </ol>
        </nav>
        <div class="d-md-flex align-items-md-start">
            <h1 class="page-title mr-sm-auto">Cập nhật sản phẩm </h1>
        </div>
    </header>
</div>

<div class="container-fluid">
    
<div class="form-horizontal" data-select2-id="10">
    <div class="row">
        <div class="col-md-8">
        <div class="card">
                    <div class="card-body">
                        <fieldset>
                            <div class="form-group row">
                                <label class="col-md-12" for="Name">Tên sản phẩm</label>
                                <div class="col-md-12">
                                    <input class="form-control text-box single-line" data-val="true" data-val-required="Vui lòng nhập tên sản phẩm" id="Name" name="Name" type="text" value="Máy trạm Dell Precision T5600 Dual Xeon Eight Core E5-2670 / RAM DDR3 32GB ECC Reg / 240GB + HDD 1TB / VGA Quadro K4000 3GB/192Bit DDR5">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-12" for="Details">Thông tin chi tiết</label>
                                <d
                            </div>

                        </fieldset>
                    </div>
                </div>
            <div class="card">
                <header class="card-header">Thông tin thêm</header>
                <div class="d-flex flex-row">
                    <ul class="nav nav-tabs nav-tabs--vertical nav-tabs--left" role="navigation">
                        <li class="nav-item">
                            <a href="#general" class="nav-link active" data-toggle="tab" role="tab" aria-controls="general">
                                <i class="fas fa-wrench"></i> Thông tin chung
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#Specifications" class="nav-link" data-toggle="tab" role="tab" aria-controls="Specifications">
                                <i class="fas fa-percentage"></i> Thông số kỹ thuật
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" style="width:90%">
                        <div class="tab-pane fade show active" id="general" role="tabpanel">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="Price">Giá bán</label>
                                                <div class="input-group">
                                                    <input class="form-control text-box single-line" data-val="true" data-val-number="The field Price must be a number." data-val-required="Vui lòng nhập giá bán." id="Price" name="Price" type="text" value="28000000">
                                                    <label class="input-group-append">
                                        <span class="badge">vnđ</span>
                                    </label>
                                                </div>
                                                <span class="field-validation-valid text-danger" data-valmsg-for="Price" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <label for="SpecialPrice">Giá ưu đãi</label>
                                                <div class="input-group">
                                                    <input class="form-control text-box single-line" data-val="true" data-val-number="The field SpecialPrice must be a number." id="SpecialPrice" name="SpecialPrice" type="text" value="25500000">
                                                    <label class="input-group-append">
                                        <span class="badge">vnđ</span>
                                    </label>
                                                </div>
                                                <span class="field-validation-valid text-danger" data-valmsg-for="SpecialPrice" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <fieldset>

                                    <legend>Quy định đóng gói, bảo hành</legend>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="Promotion">Khuyến mãi</label>
                                            <textarea class="form-control" cols="20" contenteditable="False" id="Promotion" name="Promotion" rows="5">Tặng bộ bàn phím + Chuột + Lót chuột</textarea>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Promotion" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="Package">Quy cách đóng gói</label>
                                            <textarea class="form-control" cols="20" id="Package" name="Package" rows="3">Like New - Fullbox</textarea>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Package" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="Warranty">Thông tin bảo hành</label>
                                            <textarea class="form-control" cols="20" id="Warranty" name="Warranty" rows="3">
                                                Bảo hàng 12 tháng phần cứng, 1 năm phần mềm.
                                            </textarea>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Warranty" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label for="ReturnPolicy">Quy định đổi trả</label>
                                            <input class="form-control" id="ReturnPolicy" name="ReturnPolicy" type="text" value="1 đổi 1 trong 7 ngày nếu có lỗi phần cứng. ">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="ReturnPolicy" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                </fieldset>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Specifications" role="tabpanel">
                            <div class="card-body">
                                <h1 class="card-title">Thông số kỹ thuật</h1>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea class="form-control" cols="20" id="Specifications" name="Specifications" rows="12">Hãng sản xuất:Dell
                                            
                                        </textarea>
                                        <span class="field-validation-valid text-danger" data-valmsg-for="Specifications" data-valmsg-replace="true"></span>
                                        <p class="form-text text-muted">* Mỗi tính năng ghi trên 1 dòng.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="linked" role="tabpanel">
                            <div class="card-body">
                                <h1 class="card-title">Upsells &amp; Cross-sells</h1>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="metaseo" role="tabpanel">
                            <div class="card-body">
                                <fieldset>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="MetaTitle">Tiêu đề</label>
                                        <div class="col-md-12">
                                            <input class="form-control text-box single-line" id="MetaTitle" name="MetaTitle" type="text" value="">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="MetaTitle" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-12" for="MetaDescription">Mô tả</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" cols="20" id="MetaDescription" name="MetaDescription" rows="3"></textarea>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="MetaDescription" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-4" data-select2-id="9">
            <div class="card" data-select2-id="8">
                <div class="card-body" data-select2-id="7">
                    <fieldset data-select2-id="6">

                        <legend>Thương hiệu &amp; danh mục</legend>

                        <div class="form-group row" data-select2-id="5">
                            <div class="col-md-12" data-select2-id="4">
                                <select class="form-control select2 select2-hidden-accessible" id="BrandId" name="BrandId" data-select2-id="BrandId" tabindex="-1" aria-hidden="true"><option value="" data-select2-id="15">Select brand</option>
                                    <option selected="selected" value="1" data-select2-id="2">Dell</option>
                                    <option value="2" data-select2-id="16">Hp</option>
                                    <option value="3" data-select2-id="17">Lenovo</option>
                                    <option value="4" data-select2-id="18">Ebitcam</option>
                                </select>
                                    <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-BrandId-container"><span class="select2-selection__rendered" id="select2-BrandId-container" role="textbox" aria-readonly="true" title="Dell">Dell</span>
                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                </span>
                                </span>
                                <span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <span class="field-validation-valid text-danger" data-valmsg-for="BrandId" data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="ProductCategoryIds">Chọn danh mục</label>
                                <select class="form-control" id="ProductCategoryIds" multiple="multiple" name="ProductCategoryIds" size="8">
                                        <option value="1">Laptop</option>
                                        <option selected="selected" value="2">Máy tính để bàn</option>
                                        <option selected="selected" value="17">---PC Workstation</option>
                                        <option selected="selected" value="18">---PC Văn phòng</option>
                                        <option value="21">Màn hình</option>
                                        <option value="3">Máy văn phòng</option>
                                        <option value="5">Linh kiện, Phần mềm</option>
                                        </select>
                                <span class="field-validation-valid text-danger" data-valmsg-for="ProductCategoryIds" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Hình ảnh sản phẩm</legend>
                        <div class="form-group row">
                            <label class="col-md-12" for="Image">Hình đại diện</label>
                            <div class="col-md-12">
                                <div id="preview">
                                    <img src="/uploads/images/laptop/croped/Dell%20Precision%20T5600%20(6).jpg" alt="review image" class="img-fluid">
                                </div>
                                <p>
                                    <a href="#" upload-to="#Image" previewto="#preview" class="uploadfile btn btn-secondary">Chọn Ảnh</a>
                                </p>
                                <input data-val="true" data-val-required="Vui lòng chọn hình đại diện" id="Image" name="Image" type="hidden" value="/uploads/images/laptop/croped/Dell%20Precision%20T5600%20(6).jpg">
                                <span class="field-validation-valid text-danger" data-valmsg-for="Image" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Tùy chọn đăng</legend>
                        <div class="form-group row">
                            <label class="col-md-12" for="Status">Trạng thái</label>
                            <div class="col-md-12">
                                <select class="form-control valid" data-val="true" data-val-required="The Status field is required." id="Status" name="Status" aria-describedby="Status-error" aria-invalid="false"><option value="0">Lưu tạm</option>
                                    <option selected="selected" value="1">Đang bán</option>
                                    <option value="2">Ngưng bán</option>
                                    <option value="3">Khác</option>
                                </select>
                                <span class="text-danger field-validation-valid" data-valmsg-for="Status" data-valmsg-replace="true"></span>
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

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="submit" value="Lưu sản phẩm" class="btn btn-primary btn-block">
                            </div>
                        </div>
                    </fieldset>

                            <a class="btn btn-link" href="/Admin/Products">&lt; Về danh sách</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>