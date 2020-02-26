<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">Dashboard <b>NGANT</b>IN</h1>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pesanan</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Tambah Menu
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url() ?>admin/daftar_menu" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                            <div class="form-group">
                                                <label for="npm">Harga</label>
                                                <input type="number" class="form-control" id="harga" name="harga">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="tambah_menu">Tambah Menu</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Id Pemilik</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Settings</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_menu_byid as $row) { ?>
                                        <tr>
                                            <td><?= $row->id ?></td>
                                            <td><?= $row->id_pemilik ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->harga ?></td>
                                            <td><a href="<?= base_url() . 'admin/hapus_menu/' . $row->id ?>" class="float-center btn btn-danger" onclick="return confirm('yakin?')">hapus</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>