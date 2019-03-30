        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Data</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($data) ?> Data</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-3x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Miftahul Lubab</div>
                                    <div class="text-sm mb-0 font-weight-bold text-gray-800">160533611475</div>
                                </div>
                                <div class="col-3">
                                    <img class="img-profile img-fluid rounded-circle" src="<?= base_url('assets/images') ?>/babul.jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Annisa Fitranti</div>
                                    <div class="mb-0 font-weight-bold text-gray-800">160533611444</div>
                                </div>
                                <div class="col-3">
                                    <img class="img-profile img-fluid rounded-circle" src="<?= base_url('assets/images') ?>/nisafi.jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Mirza Riski Destian</div>
                                    <div class="mb-0 font-weight-bold text-gray-800">160533611510</div>
                                </div>
                                <div class="col-3">
                                    <img class="img-profile img-fluid rounded-circle" src="<?= base_url('assets/images') ?>/mirza.jpeg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php $rank = 1;
                foreach ($data as $row) : ?>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-bottom-primary shadow h-100">
                        <div class="card-header text-center bg-gray-300 p-0">
                            <!-- <img src="<?= base_url('assets/images') ?>/babul.jpeg" class="img-fluid w-100" alt=""> -->
                            <i class="fas fa-map-marked-alt text-primary fa-7x py-4"></i>
                            <div class="bg-gray-100 text-primary font-weight-bold px-3 py-1 text-xs text-center"><?= $row->lokasi ?></div>
                        </div>
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Hasil Perhitungan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">V<sub>Total</sub> = <?= number_format($row->total, 2, '.', ',') ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-2x text-gray-300">#<?= $rank++ ?></i>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer py-2">
                            <div class="row justify-content-center">
                                <a href="#" class="btn btn-primary btn-icon-split btn-sm">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                    <span class="text">Detail</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -- >                                                                                                                                    