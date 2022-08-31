<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/album/create" class="btn btn-primary mt-3">Tambah Data Album</a>
            <h1>Daftar Album</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">judul Berita Acara</th>
                        <th scope="col">No Pemeriksaan</th>
                        <th scope="col">Tanggal Berita Acara</th>
                        <th scope="col">No MA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($album as $a) :  ?>
                        <tr>
                            <th scope="row"><?= $a['id']; ?></th>
                            <td><?= $a['judul_ba']; ?>" </td>
                            <td><?= $a['no_pemeriksaan']; ?></td>
                            <td><?= $a['tanggal_ba']; ?></td>
                            <td><?= $a['no_ma']; ?></td>
                            <td>
                                <a href="/album/<?= $a['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>