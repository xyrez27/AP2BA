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
                                    &nbsp;: <?= date('d F Y', strtotime($sewapc['tanggal_ba'])); ?>
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
                        <table style="border-style: none; text-align: justify;">
                            <tr>
                                <td style="padding-left: 30px; vertical-align: top; border-style: none;">1.</td>
                                <td style="padding-left: 10px; vertical-align: top; border-style: none;">
                                    Perjanjian Sewa Menyewa Nomor PJJ.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_psm']; ?> tanggal <?= date('d F Y', strtotime($sewapc['tanggal_psm'])); ?>
                                    tentang <?= $sewapc['judul_ba']; ?>;<br><br>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px; vertical-align: top; border-style: none;">2.</td>
                                <td style="padding-left: 10px; vertical-align: top; border-style: none;">
                                    Berita Acara Kesepakatan Peneyesuaian Tarif Pajak Pertambahan Nilai (PPN) <?= $sewapc['judul_ba']; ?> Nomor : BAC.06.02/01/<?= $sewapc['no_ppn']; ?> tanggal <?= date('d F Y', strtotime($sewapc['tanggal_ppn'])); ?><br><br>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding-left: 30px; vertical-align: top; border-style: none;">3.</td>
                                <td style="padding-left: 10px; vertical-align: top; border-style: none;">
                                    Berita Acara Pemeriksaan Pekerjaan BAC.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_pemeriksaan']; ?> tanggal <?= date('d F Y', strtotime($sewapc['tanggal_ba'])); ?>
                                    tentang <?= $sewapc['judul_ba']; ?>;
                                </td>
                            </tr>
                        </table>
                        <p>Maka pada PIHAK KEDUA dapat dilakukan pembayaran tahap <?= $sewapc['tahap_ke']; ?> (dua belas) untuk periode <?= date('d F Y', strtotime($sewapc['tanggal_pp_from'])); ?> s.d. <?= date('d F Y', strtotime($sewapc['tanggal_pp_to'])); ?></p><br /><br /><br><br>
                        <div style="position: absolute; bottom: 0; right: 0;">Pembayaran………../2</div>
                        <br><br>
                    </div>
                    <div class="page2">
                        <p>Pembayaran dilakukan dengan rincian sebagai berikut : </p>
                        <p>Tahap <?= $sewapc['tahap_ke']; ?> (Periode <?= date('d F Y', strtotime($sewapc['tanggal_pp_from'])); ?> s.d. <?= date('d F Y', strtotime($sewapc['tanggal_pp_to'])); ?>)</p>
                        <table style="width: 100%;">
                            <thead style="background-color: #e6e6e6;">
                                <tr>
                                    <th colspan="5" style="text-align: left;">DETAIL PEMBAYARAN TAHAP <?= $sewapc['tahap_ke']; ?></th>
                                </tr>
                                <tr>
                                    <th style="width:  5%;">NO</th>
                                    <th style="width: 40%;">ITEM</th>
                                    <th style="width: 20%;">QUANTITY</th>
                                    <th style="width: 25%;">HARGA SATUAN</th>
                                    <th style="width: 30%;">TOTAL</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <?php $k = 1; ?>
                                <?php foreach ($jenis_komputer as $jk) : ?>
                                    <tr>
                                        <td><?= $k; ?></td>
                                        <td style="text-align: left;"><?= $jk; ?></td>
                                        <td><?= number_format($unit_komputer[$k - 1], 0, ".", "."); ?> Unit</td>
                                        <td>Rp <?= number_format($harga_satuan[$k - 1], 0, ".", "."); ?></td>
                                        <td style="text-align: right; padding-right: 20px;">Rp &nbsp;&nbsp;&nbsp;&nbsp;<?= number_format($jumlah_harga[$k - 1], 0, ".", "."); ?></td>
                                    </tr>
                                    <?php $k++ ?>
                                <?php endforeach; ?>
                                <tr>
                                    <th colspan="4" style="text-align: right;"><b>Jumlah Sebelum Pajak</b></th>
                                    <td style="text-align: right; padding-right: 20px;"><b>Rp <?= number_format($jumlah_sebelum_pajak, 0, ".", "."); ?></b></td>
                                </tr>
                                <tr>
                                    <th colspan="4" style="text-align: right;"><b>PPn 11%</b></th>
                                    <td style="text-align: right; padding-right: 20px;"><b>Rp <?= number_format($ppn, 0, ".", "."); ?></b></td>
                                </tr>
                                <tr>
                                    <th colspan="4" style="text-align: right;"><b>Jumlah Setelah Pajak</b></th>
                                    <td style="text-align: right; padding-right: 20px;"><b>Rp <?= number_format($jumlah_setelah_pajak, 0, ".", "."); ?></b></td>
                                </tr>
                            </tbody>
                        </table><br>
                        <table width="100%" style="border-style: none;">
                            <tr style="line-height: 2;">
                                <th colspan="5" style="text-align: left; border-style: none;">Pembayaran yang telah dilakukan sebagai berikut:</th>
                            </tr>
                            <tr style="line-height: 2;">
                                <td width="15%" style="border-style: none;">Tahap <?= $sewapc['tahap_ke']; ?></td>
                                <td width="55%" style="border-style: none;">(<?= date('d F Y', strtotime($sewapc['tanggal_pp_from'])); ?> s.d. <?= date('d F Y', strtotime($sewapc['tanggal_pp_to'])); ?>)</td>
                                <td width="5%" style="border-style: none; text-align: center;">=</td>
                                <td width="5%" style="border-style: none; padding-left: 10px;">Rp</td>
                                <td width="20%" style="border-style: none; text-align: right;"><?= number_format($jumlah_setelah_pajak, 0, ".", "."); ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="border-style: none;"></td>
                                <td colspan="2" style="border-style: none;"><b>_____________________</b></td>
                            </tr>
                            <tr>
                                <th colspan="2" style="text-align: left; border-style: none;">Jumlah yang telah dibayarkan</th>
                                <th style="text-align: left; border-style: none; text-align: center;">=</th>
                                <th style="text-align: left; border-style: none; padding-left: 10px;">Rp</th>
                                <th style="text-align: left; border-style: none; text-align: right;"><?= number_format($jumlah_setelah_pajak, 0, ".", "."); ?></th>
                            </tr>
                        </table><br>
                        <p><b>Dengan Berita Acara ini dapat dibayarkan pembayaran tahap <?= $sewapc['tahap_ke']; ?> (sebelas) dengan rincian sebagai berikut:</b></p>
                        <table width="100%" style="border-style: none;">
                            <tr>
                                <td width="15%" style="border-style: none;">Tahap <?= $sewapc['tahap_ke']; ?></td>
                                <td width="55%" style="border-style: none;">(<?= date('d F Y', strtotime($sewapc['tanggal_pp_from'])); ?> s.d. <?= date('d F Y', strtotime($sewapc['tanggal_pp_to'])); ?>)</td>
                                <td width="5%" style="border-style: none; text-align: center;">=</td>
                                <td width="5%" style="border-style: none; padding-left: 10px;">Rp</td>
                                <td width="20%" style="border-style: none; text-align: right;"><?= number_format($jumlah_setelah_pajak, 0, ".", "."); ?></td>
                            </tr>
                            <tr>
                                <td style="border-style: none;"><br><br></td>
                            </tr>
                            <tr>
                                <td style="border-style: none; vertical-align: top;">Terbilang :</td>
                                <td colspan="4" style=" padding-left: 2px; border-style: none; vertical-align: top;">#tiga ratus empat puluh tujuh juta tiga puluh ribu tiga ratus delapan puluh sembilan rupiah#</td>
                            </tr>
                        </table><br>
                        <div style="position: absolute; bottom: 0; right: 0;">Demikian…………/3</div>
                    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="page3">
                        <p style="text-align: justify; line-height: 1.6;">Demikian Berita Acara Pembayaran ini ditandatangani oleh PARA PIHAK di daerah hukum Tangerang dalam rangkap 2 (dua) untuk dapat dipergunakan sebagaimana mestinya.</p><br>
                        <table width="100%" style="margin-left: auto; margin-right: auto; width: 100%; line-height: 1.6; border-style: none;">
                            <tbody>
                                <tr style="text-align: center;">
                                    <td width="50%" style="border-style: none;">PIHAK KEDUA</td>
                                    <td width="50%" style="border-style: none;">PIHAK PERTAMA</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;">PT ANGKASA PURA SOLUSI</td>
                                    <td style="border-style: none;">PT ANGKASA PURA II</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;"><br><br><br><br></td>
                                    <td style="border-style: none;"></td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="vertical-align: top; border-style: none;"><u><?= strtoupper($sewapc['karyawanaps_pb']); ?></u></td>
                                    <td style="vertical-align: top; border-style: none;"><u><?= strtoupper($sewapc['karyawanap2_pb']); ?></u></td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="vertical-align: top; border-style: none;"><?= strtoupper($sewapc['jabatanaps_pb']); ?></td>
                                    <td style="vertical-align: top; border-style: none;"><?= strtoupper($sewapc['jabatanap2_pb']); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</page>

<?= $this->endSection(); ?>