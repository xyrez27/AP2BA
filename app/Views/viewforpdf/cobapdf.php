<?= $this->extend('layout/viewforpdf'); ?>
<?= $this->section('content'); ?>
<input type="button" value="Print PDF" class="mt-2 btn btn-warning" onclick="window.open('<?= base_url('/ba/printpdf/' . $no_ba) ?>')" />
<page size="A4">
    <div class="margin">
        <div class="container">
            <div class="row mt">
                <div class="col">
                    <table class="table-pdf col" style="margin-top: 130px; font-size: 12.8px;">
                        <thead>
                            <tr class="text-center">
                                <th width="50%" height="50px" scope="col">BERITA ACARA<br>PEMERIKSAAN PEKERJAAN</th>
                                <td width="50%" scope="col" class="tab text-left" style="padding: 0px 0px; line-height: 2">&nbsp;Nomor : BAC.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_pemeriksaan']; ?> <br>
                                    &nbsp;Tanggal : <?= date('d m Y', strtotime($sewapc['tanggal_ba'])); ?>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <div class="a">
                                    <td height="70px" scope="col" style="line-height: 1.6"><?= $sewapc['judul_ba']; ?>
                                    </td>
                                    <td scope="col" class="tab text-left" style="padding: 0px 0px; line-height: 2">&nbsp;M.A No : <?= $sewapc['no_ma']; ?><br>
                                        &nbsp;RKA.THN : <?= $sewapc['rka_tahun']; ?><br>
                                        &nbsp;LAMPIRAN : <?= $sewapc['lampiran']; ?> berkas
                                    </td>
                                </div>
                            </tr>
                        </thead>
                    </table><br>
                    <p>Pada hari ini, <b>Senin</b> tanggal <b>Empat</b> Bulan <b>Juli</b> tahun <b>Dua Ribu Dua Puluh Dua</b> (<?= date('d-m-Y', strtotime($sewapc['tanggal_ba'])); ?>) kami yang bertanda tangan dibawah ini :</p><br>
                    <p><b>PT ANGKASA PURA II - KCU BANDARA SOEKARNO-HATTA :</b></p>
                    <?php $i = 1; ?>
                    <?php foreach ($karyawanap2 as $kp) : ?>
                        <p><?= $i; ?>. Nama : <?= $kp; ?> Jabatan : <?= $jabatanap2[$i - 1]; ?>;</p>
                        <?php $i++ ?>
                    <?php endforeach; ?><br>
                    <p><b>PT ANGKASA PURA SOLUSI :</b></p>
                    <?php $j = 1; ?>
                    <?php foreach ($karyawanaps as $ks) : ?>
                        <p><?= $j; ?>. Nama : <?= $ks; ?> Jabatan : <?= $jabatanaps[$j - 1]; ?>;</p>
                        <?php $j++ ?>
                    <?php endforeach; ?><br>
                    <p>Berdasarkan :</p>
                    <p>1. Perjanjian Sewa Menyewa Nomor PJJ.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_psm']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_psm'])); ?>
                        tentang <?= $sewapc['judul_ba']; ?>;</p>
                    <p>2. Berita Acara Operasional Nomor BAC.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_bao']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_bao'])); ?>
                        tentang <?= $sewapc['judul_ba']; ?>;</p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                    <p class="text-right">Telah………../2</p>
                </div>
            </div>
        </div>
    </div>
</page>
<?= $this->endSection(); ?>