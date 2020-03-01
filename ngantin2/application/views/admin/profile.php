<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url() . 'img/profile/' . $member['image'] ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $member['nama'] ?></h3>

                            <p class="text-muted text-center"><?php if ($member['level'] == 2) {
                                                                    echo "Administrator";
                                                                } else if ($member['nama_toko'] == '') {
                                                                    echo "CEO " . $member['nama_toko'];
                                                                } else {
                                                                    echo "User";
                                                                } ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item"><b>Toko</b> = <?= ($member['nama_toko']) ?></li>
                                <li class="list-group-item"><b>Level</b> = <?= ($member['level']) ?></li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="post" action="<?= base_url() ?>admin/edit_profile">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="name" name="nama" class="form-control" id="inputName" value="<?= $member['nama'] ?>" autocomplete="off" <?php
                                                                                                                                                                        if ($user['id'] != $member['id']) {
                                                                                                                                                                            echo 'disabled';
                                                                                                                                                                        }
                                                                                                                                                                        ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="inputEmail" value="<?= $member['email'] ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Toko Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name=" nama_toko" class="form-control" id="inputName2" value="<?= $member['nama_toko'] ?>" autocomplete="off" <?php
                                                                                                                                                                                    if ($user['id'] != $member['id']) {
                                                                                                                                                                                        echo 'disabled';
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="photo" class="form-control" id="inputExperience" placeholder="Experience" disabled></input>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="pass" class="form-control" id="inputExperience" placeholder="Masukkan Password Anda" disabled></input>
                                            </div>
                                            <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                        </div>
                                        <?php if ($user['id'] == $member['id']) { ?>
                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" name="edit_profile" class="btn btn-danger">Submit</button>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->