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
                                        <form action="/ba/save_form_pemeriksaan" method="POST" enctype="multipart/form-data">
                                            <?= csrf_field(); ?>
                                            <h2>BERITA ACARA PEMERIKSAAN</h2><br>
                                            <div class="row mb-3">
                                                <label for="judul_ba" class="col-sm-2 col-form-label" autofocus>Judul BA</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="judul_ba" name="judul_ba" placeholder="Masukkan Judul BA" list="listJudul" required>
                                                    <datalist id="listJudul">
                                                        <?php foreach ($judul_ba as $jba) : ?>
                                                            <option value="<?= $jba['nama_judul_ba']; ?>"><?= $jba['nama_judul_ba']; ?></option>
                                                        <?php endforeach; ?>
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="no_pemeriksaan" class="col-sm-2 col-form-label">No Pemeriksaan</label>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="no_pemeriksaan" name="no_pemeriksaan" placeholder="Masukkan Nomer BA Pemeriksaan..." value="" required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <label for="tanggal_ba" class="col-2 col-form-label">Tanggal</label>
                                                <div class="col">
                                                    <div class="input-group date" id="datepicker">
                                                        <input type="date" id="tanggal_ba" name="tanggal_ba" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="no_ma" class="col-sm-2 col-form-label">M.A No</label>
                                                <div class="col-3">
                                                    <select id="no_ma" name="no_ma" class="form-control">
                                                        <option value="Eksploitasi">Eksploitasi</option>
                                                        <option selected value="Investasi">Investasi</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="rka_tahun" class="col-sm-2 col-form-label">RKA Tahun</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="rka_tahun" name="rka_tahun" placeholder="Masukkan RKA Tahun..." value="">
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="lampiran" class="col-sm-2 col-form-label">Lampiran</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="lampiran" name="lampiran" placeholder="Masukkan Jumlah Lampiran..." value="" required>
                                                    <div id="validationServer04Feedback" class="invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <!-- KARYAWAN AP2 -->
                                            <h2>Nama Karyawan</h2>
                                            <h4 class="col-2"><b>AP II</b></h4>
                                            <div id="show_karyawan_ap2">
                                                <div class="row mb-3">
                                                    <label for="karyawan_ap2" class="col-sm-2 col-form-label">Karyawan 1</label>
                                                    <div class="col-3">
                                                        <select id="karyawan_ap2" name="karyawanap2[]" class="form-control" required>
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($karyawan_ap2 as $ap2) : ?>
                                                                <option value="<?= $ap2['nama_karyawan']; ?>"><?= $ap2['nama_karyawan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="jabatan_ap2" class="col-sm-2 col-form-label text-center">Jabatan 1</label>
                                                    <div class="col-4">
                                                        <select id="jabatan_ap2" name="jabatanap2[]" class="form-control" required>
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($jabatan_ap2 as $ap2) : ?>
                                                                <option value="<?= $ap2['nama_jabatan']; ?>"><?= $ap2['nama_jabatan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="btn btn-success add_item_btn_ap2"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- KARYAWAN APS -->
                                            <h4 class="col-2"><b>APS</b></h4>
                                            <div id="show_karyawan_aps">
                                                <div class="row mb-3">
                                                    <label for="karyawan_aps" class="col-sm-2 col-form-label">Karyawan 1</label>
                                                    <div class="col-3">
                                                        <select id="karyawan_aps" name="karyawanaps[]" class="form-control" required>
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($karyawan_aps as $aps) : ?>
                                                                <option value="<?= $aps['nama_karyawan']; ?>"><?= $aps['nama_karyawan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="jabatan_aps" class="col-sm-2 col-form-label text-center">Jabatan 1</label>
                                                    <div class="col-4">
                                                        <select id="jabatan_aps" name="jabatanaps[]" class="form-control" required>
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($jabatan_aps as $aps) : ?>
                                                                <option value="<?= $aps['nama_jabatan']; ?>"><?= $aps['nama_jabatan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="btn btn-success add_item_btn_aps"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div><br><br>
                                            <!-- BERDASARKAN -->
                                            <h4 class="col text-center">Berdasarkan</h4><br>
                                            <div id="show_berdasarkan">
                                                <div class="row mb-3">
                                                    <label for="no_psm" class="col-sm-2 col-form-label">1. PSM NO.</label>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" id="no_psm" name="no_psm" placeholder="Masukkan no PJJ.." value="" required>
                                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <label for="tanggal_psm" class="col-sm-2 col-form-label text-center">Tanggal</label>
                                                    <div class="col">
                                                        <div class="input-group date" id="datepicker">
                                                            <input type="date" id="tanggal_psm" name="tanggal_psm" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="no_bao" class="col-sm-2 col-form-label">2. BAO NO.</label>
                                                    <div class="col-3">
                                                        <input type="text" class="form-control" id="no_bao" name="no_bao" placeholder="Masukkan no BAC.." value="" required>
                                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                                        </div>
                                                    </div>
                                                    <label for="tanggal_bao" class="col-sm-2 col-form-label text-center">Tanggal</label>
                                                    <div class="col">
                                                        <div class="input-group date" id="datepicker">
                                                            <input type="date" id="tanggal_bao" name="tanggal_bao" required>
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <!-- BERDASARKAN -->
                                                <h4 class="col text-center">Periode Pemakaian</h4><br>
                                                <div class="row mb-3">
                                                    <label for="tanggal_pp_from" class="col-sm-2 col-form-label text-center">Dari</label>
                                                    <div class="col-3">
                                                        <div class="input-group date" id="datepicker">
                                                            <input type="date" id="tanggal_pp_from" name="tanggal_pp_from" required />
                                                        </div>
                                                    </div>
                                                    <label for="tanggal_pp_to" class="col-sm-2 col-form-label text-center">Sampai</label>
                                                    <div class="col">
                                                        <div class="input-group date" id="datepicker">
                                                            <input type="date" id="tanggal_pp_to" name="tanggal_pp_to" required />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <h4 class="col text-center">Rincian Perangkat</h4><br>
                                            <div id="show_jenis_komputer">
                                                <div class="row mb-3">
                                                    <label for="jenis_komputer" class="col-sm-2 col-form-label">Jenis Komputer 1</label>
                                                    <div class="col-3">
                                                        <select id="jenis_komputer" name="jenis_komputer[]" class="form-control" required>
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($jenis_komputer as $pc) : ?>
                                                                <option value="<?= $pc['nama_jenis_komputer']; ?>"><?= $pc['nama_jenis_komputer']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="unit_komputer" class="col-sm-2 col-form-label text-center">Unit</label>
                                                    <div class="col-4">
                                                        <input type="text" class="form-control" id="unit_komputer" name="unit_komputer[]" placeholder="Masukkan Jumlah Unit" list="listJenis" required>
                                                        <datalist id="listJenis">
                                                            <?php foreach ($jenis_komputer as $unit) : ?>
                                                                <option value="<?= $unit['jumlah_jenis_komputer']; ?>"><?= $unit['jumlah_jenis_komputer']; ?></option>
                                                            <?php endforeach; ?>
                                                        </datalist>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="btn btn-success add_item_btn_jk"><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
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
    alert("Welcome to Halaman Berita Acara Pemeriksaan");
</script>