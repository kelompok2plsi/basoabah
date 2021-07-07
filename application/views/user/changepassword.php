<div class="container">
  <div class="row">
    <div class="col-lg">
      <h1 class="h3 mb-4 text-gray-800">Change Password</h1>
      <div class="card" style="width: 50%;">
        <div class="container">
          <div class="card-body">
            <div class="row">
              <div class="col-lg">
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('user/changepassword') ?>" method="post">
                  <div class="form-group mb-3">
                    <label for="inputPassword" class="col-form-label">Current Password</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="new_password1">New Password</label>
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="new_password2">Repeat Password</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>