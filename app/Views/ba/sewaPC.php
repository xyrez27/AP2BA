<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="bg-gradient-primary">
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
                                                <label for="inputState" class="col-sm-2 col-form-label">M.A No</label>
                                                <div class="col-3">
                                                    <select id="inputState" class="form-control">
                                                        <option selected disabled>Pilih...</option>
                                                        <option value="eksploitasi">Eksploitasi</option>
                                                        <option value="investasi">Investasi</option>
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
                                            <h2>Nama Karyawan</h2>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label" autofocus>Karyawan 1</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Masukkan Karyawan 1..." autofocus required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label" autofocus>Karyawan 2</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Masukkan Karyawan 2..." autofocus required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label" autofocus>Karyawan 3</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Masukkan Karyawan 3..." autofocus required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label" autofocus>Karyawan 4</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Masukkan Karyawan 4..." autofocus required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="nama" class="col-sm-2 col-form-label" autofocus>Karyawan 5</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="nama" name="nama" value="" placeholder="Masukkan Karyawan 5..." autofocus required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
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