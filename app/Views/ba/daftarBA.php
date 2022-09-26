<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success mt-2" role="alert">
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
                    <?php foreach ($ba_sewapc as $bp => $value) : ?>
                        <tr class="text-center">
                            <th scope="col"><?= $i++; ?></th>
                            <td scope="col"><?= $value['judul_ba']; ?></td>
                            <td scope="col"><?= $value['no_pemeriksaan']; ?></td>
                            <td scope="col"><?= date('d/m/Y', strtotime($value['tanggal_ba'])); ?></td>
                            <td scope="col"><?= $value['no_ppn']; ?></td>
                            <td>
                                <div class="d-inline">
                                    <a class="btn btn-info" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="gg-details-more"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="/ba/edit_pemeriksaan/<?= $i - 2; ?>" target="_blank" class="dropdown-item">
                                            BA Pemeriksaan
                                        </a>
                                        <a href="/ba/edit_pembayaran/<?= $i - 2; ?>" target="_blank" class="dropdown-item">
                                            BA Pembayaran
                                        </a>
                                    </div>
                                </div>
                                <div class="d-inline">
                                    <a class="btn btn-warning" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <i class="gg-software-download"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="/ba/printpemeriksaan/<?= $i - 2; ?>" target="_blank" class="dropdown-item">
                                            Pemeriksaan
                                        </a>
                                        <a href="/ba/printpembayaran/<?= $i - 2; ?>" target="_blank" class="dropdown-item">
                                            Pembayaran
                                        </a>
                                        <a href="/ba/printformulir/<?= $i - 2; ?>" target="_blank" class="dropdown-item">
                                            Formulir
                                        </a>
                                        <a href="/ba/printsurat/<?= $i - 2; ?>" target="_blank" class="dropdown-item">
                                            Surat Pernyataan
                                        </a>
                                        <a href="/ba/printpemeriksaan/<?= $i - 2; ?>" target="_blank" class="dropdown-item" onclick="window.open('/ba/printpembayaran/<?= $i - 2; ?>'); window.open('/ba/printformulir/<?= $i - 2; ?>'); window.open('/ba/printsurat/<?= $i - 2; ?>');">
                                            Print All
                                        </a>
                                    </div>
                                </div>
                                <div class="d-inline">
                                    <a href="<?= base_url('/ba/deleteBaSewaPC/' . $value['id'] . '/' . $value['id_pemeriksaan'] . '/' . $value['id_pembayaran']) ?>" class="btn btn-danger">
                                        <i class="gg-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>