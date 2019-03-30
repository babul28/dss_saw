<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- form add data survey -->
    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="pt-4 pb-3 px-2">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add Data Survey</h1>
                        </div>
                        <?= form_open('admin/data/add') ?>
                        <div class="form-group">
                            <label for="lokasi">Alamat Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?= set_value('lokasi') ?>" placeholder=" Masukkan alamat lokasi">
                            <?= form_error('lokasi') ?>
                        </div>
                        <div class="form-group">
                        </div>
                        <div class="form-group">
                            <label for="Htanah">Harga Tanah</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white" id="basic-addon1">Rp.</span>
                                </div>
                                <input type="text" name="Htanah" class="form-control" id="Htanah" value="<?= set_value('Htanah') ?>" placeholder="Masukkan harga tanah lokasi">
                                <div class="input-group-append">
                                    <span class="input-group-text text-white bg-primary">m<sup>2</sup></span>
                                </div>
                            </div>
                            <?= form_error('Htanah'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Jgudang">Jarak Gudang</label>
                            <div class="input-group">
                                <input type="text" name="Jgudang" class="form-control" id="Jgudang" value="<?= set_value('Jgudang') ?>" placeholder="Masukkan jarak gudang dengan lokasi">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary text-white" id="basic-addon1">m</span>
                                </div>
                            </div>
                            <?= form_error('Jgudang'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Tpersaingan">Tingkat Persaingan</label>
                            <select name="Tpersaingan" id="Tpersaingan" class="form-control">
                                <option value="" disabled selected>Pilih tingkat persaingan</option>
                                <option value="1" <?php echo  set_select('Tpersaingan', '1'); ?>>Sangat Tinggi</option>
                                <option value="0.8" <?php echo  set_select('Tpersaingan', '0.8'); ?>>Tinggi</option>
                                <option value="0.6" <?php echo  set_select('Tpersaingan', '0.6'); ?>>Sedang</option>
                                <option value="0.4" <?php echo  set_select('Tpersaingan', '0.4'); ?>>Rendah</option>
                                <option value="0.2" <?php echo  set_select('Tpersaingan', '0.2'); ?>>Sangat Rendah</option>
                            </select>
                            <?= form_error('Tpersaingan'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Investasi">Investasi 3 Tahun</label>
                            <div class="input-group">
                                <input type="text" name="investasi" id="Investasi" class="form-control" value="<?= set_value('investasi') ?>" placeholder="Masukkan persentase nilai investasi">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary text-white" id="basic-addon1">%</span>
                                </div>
                            </div>
                            <?= form_error('investasi'); ?>
                        </div>
                        <div class="form-group">
                            <label for="Jpeternak">Jumlah Peternak</label>
                            <div class="input-group">
                                <input type="text" name="Jpeternak" id="Jpeternak" class="form-control" value="<?= set_value('Jpeternak') ?>" placeholder="Masukkan jumlah peternak">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-primary text-white" id="basic-addon1">Orang</span>
                                </div>
                            </div>
                            <?= form_error('Jpeternak'); ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -- >                                                                                               