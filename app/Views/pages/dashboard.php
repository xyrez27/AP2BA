<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>

<div class="bg-template">
    <div class="container">
        <div class="row py-4">
            <div class="col">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"><b>BERITA ACARA SEWA PC</b></h5><br><br>
                        <p class="card-text">Berita Acara Sewa PC terdiri dari form pemeriksaan, pembayaran, formulir, dan surat pernyataan</p>
                        <a href="/ba/sewa-pc" class="btn btn-primary">Isi Form</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"><b>DAFTAR BERITA ACARA SEWA PC</b></h5><br><br>
                        <p class="card-text">Berisi daftar-daftar berita acara sewa pc yang telah diinput berupa form pemeriksaan, pembayaran, formulir, dan surat pernyataan</p>
                        <a href="/ba/daftarBA" class="btn btn-primary">Lihat Daftar BA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>