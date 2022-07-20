<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Berita Acara</h2>
            <form action="/beritaacara/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label" autofocus>Judul BA</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autofocus value="">
                        <div id="validationServer04Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="date" class="col-2 col-form-label">Tanggal</label>
                    <div class="col">
                        <div class="input-group date" id="datepicker">
                            <input type="date" id="tanggal" name="tanggal">
                            <!-- <input type="text" class="form-control">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </span> -->
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputState" class="col-sm-2 col-form-label">M.A No</label>
                    <div class="col-3">
                        <select id="inputState" class="form-control">
                            <option selected disabled>Pilih...</option>
                            <option>Eksploitasi</option>
                            <option>Investasi</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">RKA Tahun</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="RKA" name="RKA" autofocus value="">
                        <div id="validationServer04Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Lampiran</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lampiran" name="lampiran" autofocus value="">
                        <div id="validationServer04Feedback" class="invalid-feedback">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>