<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link">
        <img src="<?= base_url() ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><b>NGANT</b>IN</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?= base_url() . 'img/profile/' . $user['image'] ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['nama'] ?></a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= base_url() ?>admin" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if ($user['level'] == 2) { ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>ADMIN
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/user_admin" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/toko_admin" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Toko</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/pesanan_admin" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Pesanan</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <?php if ($user['nama_toko'] != null) { ?>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>PEMILIK TOKO
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/pesanan_toko" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daftar Pesanan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>admin/daftar_menu" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah Menu</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>PEMESAN
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/daftar_toko" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Toko</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>admin/pesanan_toko" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lihat Pesanan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>admin/edit_profile" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>auth/logout" class="nav-link text-danger">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>