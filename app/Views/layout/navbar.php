<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('/pages/dashboard'); ?>">
            <img src="<?php echo base_url('/img/ap2.jpg'); ?>" alt="" class="logo-ap2">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Berita Acara
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url('/ba/sewa-pc'); ?>">SEWA PC</a>
                        <a class="dropdown-item" href="<?php echo base_url('/ba/sewa-printer'); ?>">SEWA PRINTER</a>
                        <a class="dropdown-item" href="<?php echo base_url('/ba/tagihan-listrik'); ?>">TAGIHAN LISTRIK</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Daftar BA
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo base_url('/ba/daftarBA'); ?>">Daftar Berita Acara</a>
                    </div>
                </li>

            </ul>
            <a class="nav-link navbar-right btn btn-danger" href="<?php echo base_url('/logout'); ?>" role="button">
                Logout <span class="fa fa-user" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</nav>