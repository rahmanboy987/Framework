<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url() ?>index2.html"><b>LOG</b>IN</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url() ?>auth/login" method="post">
        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
        <div class="input-group mb-3">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
      </div>

      <p class="mb-1">
        <a href="<?= base_url() ?>auth/forgot">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url() ?>auth/register" class="text-center">Register a new membership</a>
      </p>
    </div>
  </div>
</div>