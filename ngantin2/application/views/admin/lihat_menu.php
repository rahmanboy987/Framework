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
                            <h3 class="card-title">Pesanan All</h3>

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
                                        <th>id_pemilik</th>
                                        <th>Nama Menu</th>
                                        <th>Harga</th>
                                        <th>jumlah</th>
                                        <th>Pesan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($all_menu as $row) { ?>
                                        <tr>
                                            <form action="" method="post">
                                                <td><?= $row->id ?></td>
                                                <td><?= $row->id_pemilik ?></td>
                                                <td><?= $row->nama ?></td>
                                                <td><?= $row->harga ?></td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="number" name="banyak" class="form-control" style="width: 100px;" min="1" required>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id_pemilik" value="<?= $row->id_pemilik ?>">
                                                        <input type="hidden" name="id_menu" value="<?= $row->id ?>">

                                                        <button type="submit" name="pesan_menu" class="btn btn-primary">Pesan Menu</button>
                                                    </div>
                                                </td>
                                            </form>
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