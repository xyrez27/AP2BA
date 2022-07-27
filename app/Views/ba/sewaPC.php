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
                                        <form action="/beritaacara/save" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <h2>BERITA ACARA SEWA PC</h2>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label" autofocus>Judul BA</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Masukkan Judul BA..." autofocus required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="date" class="col-2 col-form-label">Tanggal</label>
                                                <div class="col">
                                                    <div class="input-group date" id="datepicker">
                                                        <input type="date" id="tanggal" name="tanggal">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="no_ma" class="col-sm-2 col-form-label">M.A No</label>
                                                <div class="col-3">
                                                    <select id="no_ma" class="form-control">
                                                        <!-- <option selected disabled>Pilih...</option> -->
                                                        <option value="eksploitasi">Eksploitasi</option>
                                                        <option selected value="investasi">Investasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label">RKA Tahun</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="RKA" name="RKA" placeholder="Masukkan RKA Tahun..." value="">
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label">Lampiran</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lampiran" name="lampiran" placeholder="Masukkan Jumlah Lampiran..." value="">
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <h2>Nama Karyawan</h2> <!-- KARYAWAN AP2 -->
                                            <h4 class="col-2"><b>AP II</b></h4>
                                            <div class="row mb-3">
                                                <label for="karyawan_ap2" class="col-sm-2 col-form-label">Karyawan 1</label>
                                                <div class="col-3">
                                                    <select id="karyawan_ap2" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($karyawan_ap2 as $ap2) : ?>
                                                            <option value="<?= $ap2['nama_karyawan']; ?>"><?= $ap2['nama_karyawan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label for="jabatan_ap2" class="col-sm-2 col-form-label">Jabatan 1</label>
                                                <div class="col">
                                                    <select id="jabatan_ap2" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($jabatan_ap2 as $ap2) : ?>
                                                            <option value="<?= $ap2['nama_jabatan']; ?>"><?= $ap2['nama_jabatan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="karyawan_ap2" class="col-sm-2 col-form-label">Karyawan 2</label>
                                                <div class="col-3">
                                                    <select id="karyawan_ap2" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($karyawan_ap2 as $ap2) : ?>
                                                            <option value="<?= $ap2['nama_karyawan']; ?>"><?= $ap2['nama_karyawan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label for="jabatan_ap2" class="col-sm-2 col-form-label">Jabatan 2</label>
                                                <div class="col">
                                                    <select id="jabatan_ap2" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($jabatan_ap2 as $ap2) : ?>
                                                            <option value="<?= $ap2['nama_jabatan']; ?>"><?= $ap2['nama_jabatan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="karyawan_ap2" class="col-sm-2 col-form-label">Karyawan 3</label>
                                                <div class="col-3">
                                                    <select id="karyawan_ap2" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($karyawan_ap2 as $ap2) : ?>
                                                            <option value="<?= $ap2['nama_karyawan']; ?>"><?= $ap2['nama_karyawan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label for="jabatan_ap2" class="col-sm-2 col-form-label">Jabatan 3</label>
                                                <div class="col">
                                                    <select id="jabatan_ap2" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($jabatan_ap2 as $ap2) : ?>
                                                            <option value="<?= $ap2['nama_jabatan']; ?>"><?= $ap2['nama_jabatan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="col-2"><b>APS</b></h4> <!-- KARYAWAN APS -->
                                            <div class="row mb-3">
                                                <label for="karyawan_aps" class="col-sm-2 col-form-label">Karyawan 1</label>
                                                <div class="col-3">
                                                    <select id="karyawan_aps" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($karyawan_aps as $aps) : ?>
                                                            <option value="<?= $aps['nama_karyawan']; ?>"><?= $aps['nama_karyawan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label for="jabatan_aps" class="col-sm-2 col-form-label">Jabatan 1</label>
                                                <div class="col">
                                                    <select id="jabatan_aps" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($jabatan_aps as $aps) : ?>
                                                            <option value="<?= $aps['nama_jabatan']; ?>"><?= $aps['nama_jabatan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="karyawan_aps" class="col-sm-2 col-form-label">Karyawan 2</label>
                                                <div class="col-3">
                                                    <select id="karyawan_aps" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($karyawan_aps as $aps) : ?>
                                                            <option value="<?= $aps['nama_karyawan']; ?>"><?= $aps['nama_karyawan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <label for="jabatan_aps" class="col-sm-2 col-form-label">Jabatan 2</label>
                                                <div class="col">
                                                    <select id="jabatan_aps" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <?php foreach ($jabatan_aps as $aps) : ?>
                                                            <option value="<?= $aps['nama_jabatan']; ?>"><?= $aps['nama_jabatan']; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
<?= $this->endSection(); ?>