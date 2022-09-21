<?= $this->extend('layout/viewforpdf'); ?>
<?= $this->section('content'); ?>
<page size="A4">
    <div class="margin">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <div class="page1">
                        <h2 style="text-align: center;"><u>PERMOHONAN PEMBAYARAN</u></h2>
                        <!-- Under Table -->
                        <table style="border-style: none;">
                            <tr style="text-align:justify; vertical-align:top; border-style: none;">
                                <td style="border-style: none;">PEKERJAAN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td style="border-style: none;">:&nbsp;&nbsp;</td>
                                <td style="border-style: none;"><?= strtoupper($sewapc['judul_ba']); ?> UNTUK PERIODE PEMAKAIAN <?= date('d m Y', strtotime($sewapc['tanggal_pp_from'])); ?> S.D. <?= date('d m Y', strtotime($sewapc['tanggal_pp_to'])); ?><br>
                                    KANTOR CABANG UTAMA - PT ANGKASA PURA II</td>
                            </tr>
                            <tr style="text-align:justify; vertical-align:top; border-style: none;">
                                <td style="border-style: none;">PEMBORONG</td>
                                <td style="border-style: none;">:</td>
                                <td style="border-style: none;"><b>PT ANGKASA PURA SOLUSI</b></td>
                            </tr>
                            <tr style="text-align:justify; vertical-align:top; border-style: none;">
                                <td style="border-style: none;">NILAI (exc. PPN)</td>
                                <td style="border-style: none;">:</td>
                                <td style="border-style: none;"><b>Rp 3.751.680.000</b></td>
                            </tr>
                            <tr style="text-align:justify; vertical-align:top; border-style: none;">
                                <td style="border-style: none;">NOMOR KONTRAK</td>
                                <td style="border-style: none;">:</td>
                                <td style="border-style: none;">PJJ.06.02/01/<?= date('m/Y', strtotime($sewapc['tanggal_ba'])); ?>/<?= $sewapc['no_psm']; ?> Tanggal <?= date('d m Y', strtotime($sewapc['tanggal_psm'])); ?></td>
                            </tr>
                            <tr style="text-align:justify; vertical-align:top; border-style: none;">
                                <td style="border-style: none;">PEMBAYARAN</td>
                                <td style="border-style: none;">:</td>
                                <td style="border-style: none;"> TAHAP <?= $sewapc['tahap_ke']; ?> Rp347.030.389 <br>
                                    <i>(tiga ratus empat puluh tujuh juta tiga puluh ribu tiga ratus delapan puluh sembilan rupiah</i>
                                </td>
                            </tr>
                        </table><br>
                        <table style="width: 100%;">
                            <thead>
                                <tr style="text-align: center;">
                                    <td>NO.</td>
                                    <td>TANGGAL</td>
                                    <td>KEPADA YTH</td>
                                    <td>KETERANGAN</td>
                                    <td>DARI</td>
                                    <td>TANDA TANGAN</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <br><br><br><br>
                                        <br><br><br><br>
                                        <br><br><br><br>
                                        <br><br><br><br>
                                        <br><br><br><br>
                                        <br><br><br><br>
                                        <br><br><br><br>
                                        <br><br><br><br>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</page>
<?= $this->endSection(); ?>