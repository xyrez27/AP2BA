<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/css/style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <title><?= $title; ?></title>
</head>

<body>

    <div class="template">
        <?= $this->include('layout/navbar'); ?>
        <div class="content">
            <?= $this->renderSection('content'); ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- My Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script>
        $(document).ready(function() {
            var x = 1,
                y = 1,
                z = 1,
                i = 1;
            $(".add_item_btn_ap2").click(function(e) {
                x++;
                e.preventDefault();
                $("#show_karyawan_ap2").append(`<div class="row mb-3">
                                                    <label for="karyawan_ap2" class="col-sm-2 col-form-label">Karyawan ` + x + `</label>
                                                    <div class="col-3">
                                                        <select id="karyawan_ap2" name="karyawanap2[]" class="form-control">
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($karyawan_ap2 as $ap2) : ?>
                                                                <option value="<?= $ap2['nama_karyawan']; ?>"><?= $ap2['nama_karyawan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="jabatan_ap2" class="col-sm-2 col-form-label text-center">Jabatan ` + x + `</label>
                                                    <div class="col-4">
                                                        <select id="jabatan_ap2" name="jabatanap2[]" class="form-control">
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($jabatan_ap2 as $ap2) : ?>
                                                                <option value="<?= $ap2['nama_jabatan']; ?>"><?= $ap2['nama_jabatan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="btn btn-danger remove_item_btn_ap2"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </div>`);
            });
            $(".add_item_btn_aps").click(function(j) {
                y++;
                j.preventDefault();
                $("#show_karyawan_aps").append(`<div class="row mb-3">
                                                    <label for="karyawan_aps" class="col-sm-2 col-form-label">Karyawan ` + y + `</label>
                                                    <div class="col-3">
                                                        <select id="karyawan_aps" name="karyawanaps[]" class="form-control">
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($karyawan_aps as $aps) : ?>
                                                                <option value="<?= $aps['nama_karyawan']; ?>"><?= $aps['nama_karyawan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="jabatan_aps" class="col-sm-2 col-form-label text-center">Jabatan ` + y + `</label>
                                                    <div class="col-4">
                                                        <select id="jabatan_aps" name="jabatanaps[]" class="form-control">
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($jabatan_aps as $aps) : ?>
                                                                <option value="<?= $aps['nama_jabatan']; ?>"><?= $aps['nama_jabatan']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="btn btn-danger remove_item_btn_aps"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </div>`);
            });
            $(".add_item_btn_jk").click(function(k) {
                z++;
                k.preventDefault();
                $("#show_jenis_komputer").append(`<div class="row mb-3">
                                                    <label for="jenis_komputer" class="col-sm-2 col-form-label">Jenis Komputer ` + z + `</label>
                                                    <div class="col-3">
                                                        <select id="jenis_komputer" name="jenis_komputer[]" class="form-control">
                                                            <option selected disabled value="">Pilih...</option>
                                                            <?php foreach ($jenis_komputer as $pc) : ?>
                                                                <option value="<?= $pc['nama_jenis_komputer']; ?>"><?= $pc['nama_jenis_komputer']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <label for="unit_komputer" class="col-sm-2 col-form-label text-center">Unit</label>
                                                    <div class="col-4">
                                                        <input type="number" class="form-control" id="unit_komputer" name="unit_komputer[]" placeholder="Masukkan Jumlah Unit" list="listJenis">
                                                        <datalist id="listJenis">
                                                            <?php foreach ($jenis_komputer as $unit) : ?>
                                                                <option value="<?= $unit['jumlah_jenis_komputer']; ?>"><?= $unit['jumlah_jenis_komputer']; ?></option>
                                                            <?php endforeach; ?>
                                                        </datalist>
                                                    </div>
                                                    <div class="col text-right">
                                                        <button class="btn btn-danger remove_item_btn_jk"><i class="fa fa-close"></i></button>
                                                    </div>
                                                </div>`);
            });
            $(document).on('click', '.remove_item_btn_ap2', function(e) {
                x--;
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
            $(document).on('click', '.remove_item_btn_aps', function(j) {
                y--;
                j.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
            $(document).on('click', '.remove_item_btn_jk', function(k) {
                z--;
                k.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var i = 1;
            $(".add_item_btn_harga").click(function(k) {
                i++;
                k.preventDefault();
                $("#show_harga_satuan").append(`<div class="row mb-3">
                                                        <label for="harga_satuan` + i + `" class="col-sm-2 col-form-label">` + i + `. Harga Satuan</label>
                                                        <div class="col">
                                                            <input type="text" class="form-control" id="harga_satuan" name="harga_satuan[]" placeholder="Masukkan Harga" value="" required>
                                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                            </div>
                                                        </div>
                                                        <div class="col text-left">
                                                            <button class="btn btn-danger remove_item_btn_harga"><i class="fa fa-close"></i></button>
                                                        </div>
                                                    </div>`);
            });
            $(document).on('click', '.remove_item_btn_harga', function(k) {
                i--;
                k.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
        });
    </script>
</body>

</html>