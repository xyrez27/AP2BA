<?= $this->extend('layout/viewforpdf'); ?>
<?= $this->section('content'); ?>

<page size="A4">
    <div class="margin">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <div class="page1">
                        <table class="table" style="font-style: Tahoma; align-items: center; line-height: 1.6;">
                            <tr>
                                <th width="50%" scope="col">BERITA ACARA<br>PEMBAYARAN PEKERJAAN</th>
                                <td scope="col" colspan="4" class="tab text-left" style="border-right-style: none;">
                                    &nbsp;Nomor <br>
                                    &nbsp;Tanggal
                                </td>
                                <td scope="col" class="tab text-left">
                                    &nbsp;: BAC.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_pemeriksaan']; ?> <br>
                                    &nbsp;: <?= date('d m Y', strtotime($sewapc['tanggal_ba'])); ?>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td scope="col" style="text-align: center;"><?= strtoupper($sewapc['judul_ba']); ?></td>
                                <td scope="col" colspan="4" class="tab text-left" style="border-right-style: none;">
                                    &nbsp;M.A No <br>
                                    &nbsp;RKA.THN <br>
                                    &nbsp;LAMPIRAN
                                </td>
                                <td scope="col" class="tab text-left">
                                    &nbsp;: <?= $sewapc['no_ma']; ?><br>
                                    &nbsp;: <?= $sewapc['rka_tahun']; ?><br>
                                    &nbsp;: <?= $sewapc['lampiran']; ?> berkas
                                </td>
                            </tr>
                        </table>
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
                        <p>2. Berita Acara Kesepakatan Peneyesuaian Tarif Pajak Pertambahan Nilai (PPN) BAC.06.02/01/<?= $sewapc['judul_ba']; ?> Nomor : BAC.06.02/01/<?= $sewapc['no_ppn']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_ppn'])); ?>
                            tentang <?= $sewapc['judul_ba']; ?>;</p>
                        <p>3. Berita Acara Pemeriksaan Pekerjaan BAC.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_pemeriksaan']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_ba'])); ?>
                            tentang <?= $sewapc['judul_ba']; ?>;</p>
                        <p>Maka pada PIHAK KEDUA dapat dilakukan pembayaran tahap <?= $sewapc['tahap_ke']; ?> untuk periode <?= $sewapc['tanggal_pp_from']; ?> s.d. <?= $sewapc['tanggal_pp_to']; ?></p><br /><br /><br /><br /><br /><br />
                        <p class="text-right">Pembayaran………../2</p>
                        <p>Pembayaran dilakukan dengan rincian sebagai berikut : </p>
                        <p>Tahap <?= $sewapc['tahap_ke']; ?> (Periode <?= $sewapc['tanggal_pp_from']; ?> s.d <?= $sewapc['tanggal_pp_to']; ?>)</p>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="5">DETAIL PEMBAYARAN TAHAP <?= $sewapc['tahap_ke']; ?></th>
                                    <th>NO</th>
                                    <th>ITEM</th>
                                    <th>QUANTITY</th>
                                    <th>HARGA SATUAN</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</page>
<?= $this->endSection(); ?>