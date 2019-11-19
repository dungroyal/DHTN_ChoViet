<div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Chào mừng trở lại</a>
                    </li>
                    <li class="breadcrumb-item active"><?=$info_store_admin['name'];?></li>
                </ol>

                <!-- Icon Cards-->
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-primary o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-comments"></i>
                                </div>
                                <div class="mr-5">0 Tin nhắn mới!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Chi tiết</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-warning o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-list"></i>
                                </div>
                                <div class="mr-5">2 Danh mục!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?act=QL_Catalog">
                                <span class="float-left">Chi tiết</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-success o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-shopping-cart"></i>
                                </div>
                                <div class="mr-5">123 Đơn hàng mới!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="#">
                                <span class="float-left">Chi tiết</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="card text-white bg-danger o-hidden h-100">
                            <div class="card-body">
                                <div class="card-body-icon">
                                    <i class="fas fa-fw fa-life-ring"></i>
                                </div>
                                <div class="mr-5">13 Sản phẩm!</div>
                            </div>
                            <a class="card-footer text-white clearfix small z-1" href="?act=QL_Catalog">
                                <span class="float-left">Chi tiết</span>
                                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Area Chart Example-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-chart-area"></i> Area Chart Example</div>
                    <div class="card-body">
                        <canvas id="myAreaChart" width="100%" height="30"></canvas>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->