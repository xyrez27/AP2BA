<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="bg-template">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
                                <div class="p-5">
                                    <div class="text-center">
                                        <form action="<?php echo base_url('/ba/update_pembayaran/' . $sewapc['id_pembayaran'] . '/' . $sewapc['id_pemeriksaan']); ?>'); ?>" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <h2>BERITA ACARA PEMBAYARAN</h2><br>
                                            <h2>Nama Karyawan</h2> <!-- KARYAWAN AP2 -->
                                            <h4 class="col-2"><b>AP II</b></h4>
                                            <div id="show_karyawan_ap2">
                                                <?php $i = 1; ?>
                                                <?php foreach ($karyawanap2_pb as $kp) : ?>
                                                    <div class="row mb-3">
                                                        <label for="karyawan_ap2" class="col-sm-2 col-form-label">Karyawan <?= $i; ?></label>
                                                        <div class="col-3">
                                                            <select id="karyawan_ap2" name="karyawanap2_pb[]" class="form-control" required>
                                                                <option selected value="<?= $kp; ?>"><?= $kp; ?></option>
                                                                <?php foreach ($karyawan_ap2 as $ap2) : ?>
                                                                    <option value="<?= $ap2['nama_karyawan']; ?>"><?= $ap2['nama_karyawan']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <label for="jabatan_ap2" class="col-sm-2 col-form-label text-center">Jabatan <?= $i; ?></label>
                                                        <div class="col-4">
                                                            <select id="jabatan_ap2" name="jabatanap2_pb[]" class="form-control" required>
                                                                <option selected value="<?= $jabatanap2_pb[$i - 1]; ?>"><?= $jabatanap2_pb[$i - 1]; ?></option>
                                                                <?php foreach ($jabatan_ap2 as $ap2) : ?>
                                                                    <option value="<?= $ap2['nama_jabatan']; ?>"><?= $ap2['nama_jabatan']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="col text-right">
                                                            <button class="btn btn-success add_item_btn_ap2"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <?php $i++ ?>
                                                <?php endforeach ?>
                                            </div>
                                            <h4 class="col-2"><b>APS</b></h4> <!-- KARYAWAN APS -->
                                            <div id="show_karyawan_aps">
                                                <?php $j = 1; ?>
                                                <?php foreach ($karyawanaps_pb as $ks) : ?>
                                                    <div class="row mb-3">
                                                        <label for="karyawan_aps" class="col-sm-2 col-form-label">Karyawan <?= $j; ?></label>
                                                        <div class="col-3">
                                                            <select id="karyawan_aps" name="karyawanaps_pb[]" class="form-control" required>
                                                                <option selected value="<?= $ks; ?>"><?= $ks; ?></option>
                                                                <?php foreach ($karyawan_aps as $aps) : ?>
                                                                    <option value="<?= $aps['nama_karyawan']; ?>"><?= $aps['nama_karyawan']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <label for="jabatan_aps" class="col-sm-2 col-form-label text-center">Jabatan <?= $j; ?></label>
                                                        <div class="col-4">
                                                            <select id="jabatan_aps" name="jabatanaps_pb[]" class="form-control" required>
                                                                <option selected value="<?= $jabatanaps_pb[$j - 1]; ?>"><?= $jabatanaps_pb[$j - 1]; ?></option>
                                                                <?php foreach ($jabatan_aps as $aps) : ?>
                                                                    <option value="<?= $aps['nama_jabatan']; ?>"><?= $aps['nama_jabatan']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                        <div class="col text-right">
                                                            <button class="btn btn-success add_item_btn_aps"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <?php $i++ ?>
                                                <?php endforeach ?>
                                            </div><br><br>
                                            <h6 class="col-2 text-left">Berdasarkan</h6> <!-- Berdasarkan -->
                                            <div id="show_berdasarkan">
                                                <div class="row mb-3">
                                                    <label for="no_ppn" class="col-sm-2 col-form-label">2. PPN NO.</label>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" id="no_ppn" name="no_ppn" placeholder="Masukkan no PPN.." value="<?= $sewapc['no_ppn']; ?>" required>
                                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <label for="tanggal_ppn" class="col-sm-2 col-form-label text-center">Tanggal</label>
                                                    <div class="col">
                                                        <div class="input-group date" id="datepicker">
                                                            <input type="date" id="tanggal_ppn" name="tanggal_ppn" value="<?= $sewapc['tanggal_ppn']; ?>" required>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <h6 class="col text-left">Harga Satuan Jenis Komputer</h6>
                                                <div id="show_harga_satuan">
                                                    <?php $k = 1; ?>
                                                    <?php foreach ($hargasatuan as $hs) : ?>
                                                        <div class="row mb-3">
                                                            <label for="harga_satuan1" class="col-sm-2 col-form-label"><?= $k; ?>. Harga Satuan</label>
                                                            <div class="col">
                                                                <input type="text" class="form-control" id="harga_satuan" name="harga_satuan[]" placeholder="Masukkan Harga" value="<?= $hs; ?>" required>
                                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <div class="col text-left">
                                                                <button class="btn btn-success add_item_btn_harga"><i class="fa fa-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <?php $k++ ?>
                                                    <?php endforeach ?>
                                                </div><br>
                                                <h6 class="col text-left">Tahap Ke</h6>
                                                <div class="row mb-3">
                                                    <label for="tahap_ke" class="col-sm-2 col-form-label">Tahap ke-</label>
                                                    <div class="col-2">
                                                        <input type="text" class="form-control" id="tahap_ke" name="tahap_ke" placeholder="1" value="<?= $sewapc['tahap_ke']; ?>" required>
                                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <h6 class="col text-left">Exclude PPN</h6>
                                                <div class="row mb-3">
                                                    <label for="exclude_ppn" class="col-sm-2 col-form-label">Exclude PPN</label>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" id="exclude_ppn" name="exclude_ppn" placeholder="Masukkan total sebelum PPN" value="<?= $sewapc['exclude_ppn']; ?>" required>
                                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br><br>
                                            <button type="submit" class="btn btn-primary">Next</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    alert("Welcome to Halaman Berita Acara Pembayaran");
</script>
<?= $this->endSection(); ?>