<div class="container text-center">
    <div class="row">
        <div class="col">
            <?php Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h1>Selamat Datang di Website Ngantin</h1>
            <h2>Berikut adalah daftar menu yang tersedia</h2>
            <table align="center" border="1">
                <tr>
                    <th>Nama Menu</th>
                    <th>Harga Menu</th>
                    <th>Option</th>
                </tr>
                <?php foreach ($data['menu'] as $menu) { ?>
                    <tr>
                        <td><?= $menu['nama_menu']; ?></td>
                        <td><?= $menu['harga_menu']; ?></td>
                        <td><a href="<?= BASE_URL ?>/pesan/<?= $menu['id'] ?>"><button>Pesan</button></a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>