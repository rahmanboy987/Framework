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