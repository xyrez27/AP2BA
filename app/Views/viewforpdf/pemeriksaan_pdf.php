<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table,
        td,
        th {
            border: 1px solid;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <input type="button" value="Print PDF" class="mt-2 btn btn-warning" onclick="window.open('<?= base_url('/ba/printpdf/' . $no_ba) ?>')" />
    <page size="A4">
        <div class="margin">
            <div class="container">
                <div class="row mt">
                    <div class="col">
                        <table class="table-pdf col" style="margin-top: 130px; font-size: 12.8px;">
                            <thead>
                                <tr>
                                    <th>&nbsp;nojj</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>satuduatiga</td>
                                </tr>
                            </tbody>
                        </table>
                        satu kata ajaa
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
</body>

</html>