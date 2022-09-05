<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>
            <a href="/ba/sewa-pc" class="btn btn-info mt-3">Tambah Data Berita Acara</a>
            <h1 class="mt-2">Daftar Berita Acara</h1>
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <th scope="col">NO</th>
                        <th scope="col">Judul Berita Acara</th>
                        <th scope="col">No Pemeriksaan</th>
                        <th scope="col">Tanggal BA</th>
                        <th scope="col">No PPN</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($ba_sewapc as $value) : ?>
                        <tr class="text-center">
                            <th scope="col"><?= $i++; ?></th>
                            <td scope="col"><?= $value['judul_ba']; ?></td>
                            <td scope="col"><?= $value['no_pemeriksaan']; ?></td>
                            <td scope="col"><?= date('d/m/Y', strtotime($value['tanggal_ba'])); ?></td>
                            <td scope="col"><?= $value['no_ppn']; ?></td>
                            <td>
                                <a href="/ba/more" class="btn btn-info">
                                    <i class="gg-details-more"></i>
                                </a>
                                <a href="/ba/phpword/<?= $i - 2; ?>" class="btn btn-warning">
                                    <i class="gg-software-download"></i>
                                </a><br>
                                <a href="<?= base_url('/ba/deleteBaPemeriksaan/' . $value['id_ba']) ?>" class="btn btn-danger">
                                    <i class="gg-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>