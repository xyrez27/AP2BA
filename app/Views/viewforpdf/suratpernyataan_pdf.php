<?= $this->extend('layout/viewforpdf'); ?>
<?= $this->section('content'); ?>
<page size="A4">
    <div class="margin">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <div class="page1">
                        <h2 style="text-align: center;"><b><u>SURAT PERNYATAAN PEMBAYARAN</u></b></h2><br>
                        <!-- Under Table -->
                        <p>
                            Kami yang bertandatangan di bawah ini, menyatakan dengan sesungguhnya : <br>
                        </p>
                        <table style="border-style: none;">
                            <tr style="text-align: left; vertical-align: top;">
                                <td style="border-style: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;&nbsp;</td>
                                <td style="text-align: justify; border-style: none;">Bahwa telah dilaksanakan proses pemeriksaan pekerjaan <?= $sewapc['judul_ba']; ?>;</td>
                            </tr>
                            <tr style="text-align: left; vertical-align: top;">
                                <td style="border-style: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;&nbsp;</td>
                                <td style="text-align: justify; border-style: none;">Kami telah memeriksa, meneliti dan melakukan tindakan-tindakan yang diperlukan dalam rangka pembayaran pekerjaan <?= $sewapc['judul_ba']; ?></td>
                            </tr>
                            <tr style="text-align: left; vertical-align: top;">
                                <td style="border-style: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp;&nbsp;&nbsp;</td>
                                <td style="text-align: justify; border-style: none;">
                                    Berdasarkan hal-hal tersebut diatas, kami berkesimpulan terhadap PT Angkasa Pura Solusi dapat dibayarkan pembayaran tahap <?= $sewapc['tahap_ke']; ?>
                                    sebesar : Rp , sudah termasuk ppn (11%) sebagaimana diatur dalam Surat Perjanjian Pengadaan Jasa Nomor: PJJ.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_psm']; ?>
                                    tanggal <?= date('d m Y', strtotime($sewapc['tanggal_psm'])); ?> dan Berita Acara Kesepakatan Penyesuaian Tarif Pajak Pertambahan Nilai (PPN) Nomor: BAC.06.02/01/<?= $sewapc['no_ppn']; ?> tanggal <?= date('d m Y', strtotime($sewapc['tanggal_ppn'])); ?>
                                </td>
                            </tr>
                            <tr style="text-align: left; vertical-align: top;">
                                <td style="border-style: none;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp;&nbsp;&nbsp;</td>
                                <td style="text-align: justify; border-style: none;">Sehubungan dengan hal-hal tersebut diatas, kami sanggup untuk mempertanggungjawabkan proses pembayaran dimaksud.</td>
                            </tr>
                        </table>
                        <p>Demikian pernyataan ini kami sampaikan dengan sebenar-benarnya tanpa menyembunyikan fakta-fakta dan hal-hal material apapun, dengan demikian kami akan bertanggung jawab sepenuhnya atas kebenaran dari hal-hal yang kami nyatakan disini, sesuai dengan fungsi tugas dan tanggung jawab jabatan kami.</p>
                        <br><br>
                        <p style="text-align: right;">Tangerang, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Juli 2022 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><br>
                        <table style="width: 90%; margin-left: auto; margin-right: auto; border-style: none;">
                            <tbody>
                                <tr style="text-align: center;">
                                    <td style="width: 33%; border-style: none;"><?= $jabatanap2[0]; ?></td>
                                    <td style="width: 30%; border-style: none;"></td>
                                    <td style="width: 35%; border-style: none;"><?= $jabatanap2[1]; ?></td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;"><br><br>Materai<br>(10.000)<br><br><br></td>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;"></td>
                                </tr>
                                <tr style="text-align: center;">
                                    <td style="border-style: none;"><?= $karyawanap2[0]; ?></td>
                                    <td style="border-style: none;"></td>
                                    <td style="border-style: none;"><?= $karyawanap2[1]; ?></td>
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