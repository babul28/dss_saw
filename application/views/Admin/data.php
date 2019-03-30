<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Data Survey</h1>
        <a href="<?= base_url('admin/data/add') ?>" class=" d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Survey</h6>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('msg') ?>
            <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($surveys as $survey) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $survey->id ?></td>
                        <td><?= $survey->lokasi ?></td>
                        <td>Rp.<?= number_format($survey->harga_tanah, 2, '.', ',') ?></td>
                        <td><?= ($survey->jarak_gudang / 1000) ?> Km</td>
                        <td><?= $survey->persaingan ?></td>
                        <td><?= $survey->investasi ?>%</td>
                        <td><?= $survey->jumlah_peternak ?></td>
                        <td>
                            <a href="#" class="badge badge-warning">edit</a>
                            <a href="#" class="badge badge-danger">hapus</a>
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
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Data Fuzzy</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="dataTable2" width="100%" cellspacing="0">
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
                    foreach ($fuzzys as $fuzzy) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $fuzzy->id ?></td>
                        <td><?= $fuzzy->lokasi ?></td>
                        <td><?= $fuzzy->harga_tanah ?></td>
                        <td><?= $fuzzy->jarak_gudang ?></td>
                        <td><?= $fuzzy->persaingan ?></td>
                        <td><?= $fuzzy->investasi ?></td>
                        <td><?= $fuzzy->jumlah_peternak ?></td>
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

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --           >                                                                                 