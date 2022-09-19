<?= $this->extend('layout/viewforpdf'); ?>
<?= $this->section('content'); ?>
<page size="A4">
    <div class="margin">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <div class="page1">
                        <h2 style="text-align: center;"><b><u>SURAT PERNYATAAN PEMBAYARAN</u></b></h2>
                        <!-- Under Table -->
                        <?php $i = 1; ?>
                        <table style="border-style: none;">
                            <?php foreach ($karyawanap2 as $kp) : ?>
                                <tr>
                                    <td style="border-style: none;"><?= $i; ?>. </td>
                                    <td style="border-style: none;">Nama : <?= $kp; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td style="border-style: none;">Jabatan : <?= $jabatanap2[$i - 1]; ?>;</td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?><br>
                        </table>
                        <p><b>PT ANGKASA PURA SOLUSI :</b></p>
                        <?php $j = 1; ?>
                        <table style="border-style: none;">
                            <?php foreach ($karyawanaps as $ks) : ?>
                                <tr>
                                    <td style="border-style: none;"><?= $j; ?>. </td>
                                    <td style="border-style: none;">Nama : <?= $ks; ?> &nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td style="border-style: none;">Jabatan : <?= $jabatanaps[$j - 1]; ?>;</td>
                                </tr>
                                <?php $j++ ?>
                            <?php endforeach; ?><br>
                        </table>
                        <p>Berdasarkan :</p>
                        <p>1. Perjanjian Sewa Menyewa Nomor PJJ.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_psm']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_psm'])); ?>
                            tentang <?= $sewapc['judul_ba']; ?>;
                        </p>
                        <p>2. Berita Acara Operasional Nomor BAC.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_bao']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_bao'])); ?>
                            tentang <?= $sewapc['judul_ba']; ?>;
                        </p><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <p style="text-align: right;">Telah………../2</p>
                    </div>
                    <div class="page2">
                        <p>Telah melakukan pemeriksaan pekerjaan dan menyatakan bahwa Pekerjaan <?= $sewapc['judul_ba']; ?>
                            untuk periode pemakaian <?= date('d m Y', strtotime($sewapc['tanggal_pp_from'])); ?> s.d. <?= date('d m Y', strtotime($sewapc['tanggal_pp_to'])); ?>
                            telah terlaksana dengan baik sesuai ketentuan dengan rincian perangkat terpasang sebagai berikut :
                        </p>
                        <table style="margin-left: auto; margin-right: auto; width: 90%;">
                            <thead>
                                <tr style="background-color: #e6e6e6;">
                                    <th>NO</th>
                                    <th>JENIS KOMPUTER</th>
                                    <th>JUMLAH</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <?php $k = 1; ?>
                                <?php foreach ($jenis_komputer as $jk) : ?>
                                    <tr>
                                        <td><?= $k; ?></td>
                                        <td style="text-align: left;"><?= $jk; ?></td>
                                        <td><?= $unit_komputer[$k - 1]; ?> Unit</td>
                                    </tr>
                                    <?php $k++ ?>
                                <?php endforeach; ?>
                                <tr>
                                    <th colspan="2">TOTAL</th>
                                    <td><?= $sewapc['jumlah_unit']; ?> Unit</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>Demikian Berita Acara Pemeriksaan Pekerjaan ini dibuat dalam rangkap 2 (dua) untuk dapat digunakan sebagaimana mestinya.</p>
                        <table style="border-style: none;">
                            <thead>
                                <tr>
                                    <th colspan="7" style="text-align: left; border-style: none;">PT ANGKASA PURA SOLUSI</th>
                                    <th style="border-style: none;">&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th colspan="7" style="text-align: left; border-style: none;">PT ANGKASA PURA II</th>
                                </tr>
                                <tr>
                                    <th colspan="7" style="border-style: none;"><br><br></th>
                                    <th style="border-style: none;"></th>
                                    <th colspan="7" style="border-style: none;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="border-style: none;">1.</td>
                                    <td style="border-style: none;" colspan="4"><u><?= strtoupper($karyawanaps[0]); ?></u></td> <!-- Karyawan APS -->
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;">……………</td>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;">1.</td>
                                    <td style="border-style: none;" colspan="4"><u><?= strtoupper($karyawanap2[1]); ?></u></td> <!-- Karyawan AP2 -->
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;">……………</td>
                                </tr>
                                <tr>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;" colspan="6"><?= $jabatanaps[0]; ?></td> <!-- Jabatan APS -->
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;" colspan="6"><?= $jabatanap2[1]; ?></td> <!-- Jabatan AP2 -->
                                </tr>
                                <tr>
                                    <td style="border-style: none;" colspan="7"><br><br></td>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;" colspan="7"></td>
                                </tr>
                                <tr>
                                    <td style="border-style: none;">2.</td>
                                    <td style="border-style: none;" colspan="4"><u><?= strtoupper($karyawanaps[1]); ?></u></td> <!-- Karyawan APS -->
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;">……………</td>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;">2.</td>
                                    <td style="border-style: none;" colspan="4"><u><?= strtoupper($karyawanap2[2]); ?></u></td> <!-- Karyawan AP2 -->
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;">……………</td>
                                </tr>
                                <tr>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;" colspan="6"><?= $jabatanaps[1]; ?></td> <!-- Jabatan APS -->
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;" colspan="6"><?= $jabatanap2[2]; ?></td> <!-- Jabatan AP2 -->
                                </tr>
                            </tbody>
                        </table><br /><br /><br /><br /><br /><br />
                        <table style="margin-left: auto; margin-right: auto; width: 100%; border-style: none;">
                            <tbody>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;">Mengetahui :</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;">PT ANGKASA PURA II</td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;"><br><br><br><br><br></td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;"><u><?= strtoupper($karyawanap2[0]); ?></u></td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;"><?= strtoupper($jabatanap2[0]); ?></td>
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