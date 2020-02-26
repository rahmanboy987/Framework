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
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url() . 'img/profile/' . $user['image'] ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $user['nama'] ?></h3>

                            <p class="text-muted text-center"><?php if ($user['level'] == 2) {
                                                                    echo "Administrator";
                                                                } else if ($user['nama_toko'] == '') {
                                                                    echo "CEO " . $user['nama_toko'];
                                                                } else {
                                                                    echo "User";
                                                                } ?></p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item"><b>Toko</b> = <?= ($user['nama_toko']) ?></li>
                                <li class="list-group-item"><b>Level</b> = <?= ($user['level']) ?></li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Change Password</b></a>
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
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="inputName" value="<?= $user['nama'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="toko" class="form-control" id="inputEmail" value="<?= $user['email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Toko Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nama_toko" class="form-control" id="inputName2" value="<?= $user['nama_toko'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Photo</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="photo" class="form-control" id="inputExperience" placeholder="Experience"></input>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="pass" class="form-control" id="inputExperience" placeholder="Masukkan Password Anda"></input>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
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