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
                        <p>Pada hari ini, <b>Senin</b> tanggal <b>Empat</b> Bulan <b>Juli</b> tahun <b>Dua Ribu Dua Puluh Dua</b> (<?= date('d-m-Y', strtotime($sewapc['tanggal_ba'])); ?>) kami yang bertanda tangan dibawah ini :</p>
                        <table style="width: 100%; border-style: none; text-align: justify;">
                            <!-- Karyawan AP2-->
                            <tr>
                                <td rowspan="3" style="vertical-align: top; border-style: none;"><b>I.</b></td>
                                <td colspan="2" style="padding-left: 15px; border-style: none;"><b>PT ANGKASA PURA II-KCU BANDARA SOEKARNO-HATTA, </b>dalam hal ini diwakili oleh:</td>
                            </tr>
                            <tr>
                                <td style="line-height: 1.8; padding-left: 15px; width: 18%; border-style: none;">Nama<br>Jabatan<br></td>
                                <td style="line-height: 1.8; width: 83%; border-style: none;">: <?= $sewapc['karyawanap2_pb']; ?> <br>: <?= $sewapc['jabatanap2_pb']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="line-height: 1.8; padding-left: 15px; border-style: none;">bertindak untuk dan atas nama PT Angkasa Pura II, untuk selanjutnya disebut <b>PIHAK PERTAMA.</b><br><br></td>
                            </tr>
                            <!-- Karyawan APS-->
                            <tr>
                                <td rowspan="3" style="vertical-align: top; border-style: none;"><b>II.</b></td>
                                <td colspan="2" style="padding-left: 15px; border-style: none;"><b>PT ANGKASA PURA SOLUSI, </b>dalam hal ini diwakili oleh:</td>
                            </tr>
                            <tr>
                                <td style="line-height: 1.8; padding-left: 15px; width: 18%; border-style: none;">Nama<br>Jabatan<br></td>
                                <td style="line-height: 1.8; width: 83%; border-style: none;">: <?= $sewapc['karyawanaps_pb']; ?> <br>: <?= $sewapc['jabatanaps_pb']; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="line-height: 1.8; padding-left: 15px; border-style: none;">bertindak untuk dan atas nama PT Angkasa Pura Solusi, untuk selanjutnya disebut <b>PIHAK KEDUA.</b><br></td>
                            </tr>
                        </table>
                        <p>Berdasarkan kepada :</p>
                        <table>
                            <tr>
                                <td>
                                    <p>1. Perjanjian Sewa Menyewa Nomor PJJ.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_psm']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_psm'])); ?>
                                        tentang <?= $sewapc['judul_ba']; ?>;</p>
                                </td>
                            </tr>
                            <p>2. Berita Acara Kesepakatan Peneyesuaian Tarif Pajak Pertambahan Nilai (PPN) BAC.06.02/01/<?= $sewapc['judul_ba']; ?> Nomor : BAC.06.02/01/<?= $sewapc['no_ppn']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_ppn'])); ?>
                                tentang <?= $sewapc['judul_ba']; ?>;</p>
                            <p>3. Berita Acara Pemeriksaan Pekerjaan BAC.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_pemeriksaan']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_ba'])); ?>
                                tentang <?= $sewapc['judul_ba']; ?>;</p>
                        </table>
                        <p>Maka pada PIHAK KEDUA dapat dilakukan pembayaran tahap <?= $sewapc['tahap_ke']; ?> untuk periode <?= $sewapc['tanggal_pp_from']; ?> s.d. <?= $sewapc['tanggal_pp_to']; ?></p><br /><br />
                        <p style="text-align: right;">Pembayaran………../2</p>
                        <p>Pembayaran dilakukan dengan rincian sebagai berikut : </p>
                        <p>Tahap <?= $sewapc['tahap_ke']; ?> (Periode <?= $sewapc['tanggal_pp_from']; ?> s.d <?= $sewapc['tanggal_pp_to']; ?>)</p>
                        <table>
                            <thead>
                                <tr>
                                    <th colspan="5">DETAIL PEMBAYARAN TAHAP <?= $sewapc['tahap_ke']; ?></th>
                                </tr>
                                <tr>
                                    <th>NO</th>
                                    <th>ITEM</th>
                                    <th>QUANTITY</th>
                                    <th>HARGA SATUAN</th>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</page>
<?= $this->endSection(); ?>