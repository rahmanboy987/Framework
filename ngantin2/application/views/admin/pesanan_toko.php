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
                            <h3 class="card-title">Toko All</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Nama toko</th>
                                        <th>Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pesanan_byid as $row) { ?>
                                        <tr>
                                            <td><?= $row->id ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->nama_toko ?></td>
                                            <td><a href="<?= base_url() . 'admin/lihat_menu/' . $row->id ?>" class="float-center btn btn-primary">Lihat Menu</a></td>
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