<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Analisis Data Survey</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Data R Survey</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="datar" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Lokasi</th>
                        <th>Harga Tanah</th>
                        <th>Jarak Gudang</th>
                        <th>Persaingan</th>
                        <th>Investasi</th>
                        <th>Jumlah Peternak</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_rs as $data_r) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data_r->id ?></td>
                        <td><?= $data_r->lokasi ?></td>
                        <td><?= number_format($data_r->harga_tanah, 2, '.', ',') ?></td>
                        <td><?= number_format($data_r->jarak_gudang, 2, '.', ',') ?></td>
                        <td><?= number_format($data_r->persaingan, 2, '.', ',') ?></td>
                        <td><?= number_format($data_r->investasi, 2, '.', ',') ?></td>
                        <td><?= number_format($data_r->jumlah_peternak, 2, '.', ',') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Lokasi</th>
                        <th>Harga Tanah</th>
                        <th>Jarak Gudang</th>
                        <th>Persaingan</th>
                        <th>Investasi</th>
                        <th>Jumlah Peternak</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Data V Survey</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="datav" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Lokasi</th>
                        <th>Harga Tanah</th>
                        <th>Jarak Gudang</th>
                        <th>Persaingan</th>
                        <th>Investasi</th>
                        <th>Jumlah Peternak</th>
                        <th>Total</th>
                        <th>Rangking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_vs as $data_v) : ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data_v->id ?></td>
                        <td><?= $data_v->lokasi ?></td>
                        <td><?= number_format($data_v->harga_tanah, 2, '.', ',') ?></td>
                        <td><?= number_format($data_v->jarak_gudang, 2, '.', ',') ?></td>
                        <td><?= number_format($data_v->persaingan, 2, '.', ',') ?></td>
                        <td><?= number_format($data_v->investasi, 2, '.', ',') ?></td>
                        <td><?= number_format($data_v->jumlah_peternak, 2, '.', ',') ?></td>
                        <td><?= number_format($data_v->total, 2, '.', ',') ?></td>
                        <td>
                            <?php if ($no < 4) : ?>
                            <span class="badge badge-primary">Rangking <?= $no++ ?></span>
                            <?php else : ?>
                            <span class="badge badge-info">Rangking <?= $no++ ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Id</th>
                        <th>Lokasi</th>
                        <th>Harga Tanah</th>
                        <th>Jarak Gudang</th>
                        <th>Persaingan</th>
                        <th>Investasi</th>
                        <th>Jumlah Peternak</th>
                        <th>Total</th>
                        <th>Rangking</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 