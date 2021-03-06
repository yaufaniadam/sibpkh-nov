<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-body">
        <div class="col-md-6">
          <h4><i class="fas fa-user-edit"></i> &nbsp; Ubah Profil Pengguna</h4>
        </div>
        <div class="col-md-6 text-right">
          <a href="<?= base_url('admin/users'); ?>" class="btn btn-success"><i class="fa fa-list"></i> Semua Pengguna</a>

        </div>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">

        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <div class="box-body my-form-body">
          <?php if (isset($msg) || validation_errors() !== '') : ?>
            <div class="alert alert-warning alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-warning"></i> Alert!</h4>
              <?= validation_errors(); ?>
              <?= isset($msg) ? $msg : ''; ?>
            </div>
          <?php endif; ?>

          <?php echo form_open(base_url('admin/users/edit/' . $user['id']), 'class="form-horizontal"') ?>
          <div class="form-group">
            <label for="username" class="col-sm-2 control-label">Username</label>

            <div class="col-sm-9">
              <input type="text" name="username" value="<?= $user['username']; ?>" class="form-control" id="username" placeholder="" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="firstname" class="col-sm-2 control-label">Nama lengkap</label>

            <div class="col-sm-9">
              <input type="text" name="firstname" value="<?= $user['firstname']; ?>" class="form-control" id="firstname" placeholder="">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-9">
              <input type="email" name="email" value="<?= $user['email']; ?>" class="form-control" id="email" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="mobile_no" class="col-sm-2 control-label">Telepon</label>

            <div class="col-sm-9">
              <input type="number" name="mobile_no" value="<?= $user['mobile_no']; ?>" class="form-control" id="mobile_no" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="instansi" class="col-sm-2 control-label">Asal Instansi</label>

            <div class="col-sm-9">
              <input type="text" name="instansi" value="<?= $user['instansi']; ?>" class="form-control" id="instansi" placeholder="">
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>

            <div class="col-sm-9">
              <input type="password" name="password" class="form-control" id="password" placeholder="">
              <input type="hidden" name="password_hidden" class="form-control" value="<?= $user['password']; ?>" id="password_hidden">
            </div>
          </div>



          <div class="form-group">
            <label for="role" class="col-sm-2 control-label">Pilih Role</label>

            <div class="col-sm-9">
              <select name="role" class="form-control">
                <option value="">Pilih Role</option>
                <option value="1" <?php if ($user['role'] == 1) echo 'selected="selected"'; ?>>Administrator</option>
                <option value="2" <?php if ($user['role'] == 2) echo 'selected="selected"'; ?>>Non Administrator</option>
                >Staf</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="role" class="col-sm-2 control-label">Pilih Modul</label>
            <div class="col-sm-9">
              <?php
              $explode = explode(',', $user['modul']);
              foreach ($modules as $module) : ?>
                <input name="modul[]" type="checkbox" value="<?= $module['id']; ?>" <?= (in_array($module['id'], $explode)) ? 'checked' : ''; ?> /> <?= $module['modul'];  ?><br />
              <?php endforeach; ?>

            </div>
          </div>

          <div class="form-group">
            <div class="col-md-11">
              <input type="submit" name="submit" value="Simpan" class="btn btn-info pull-right">
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>

</section>
<script>
  $("#pengguna").addClass('active');
  $("#pengguna .submenu_pengguna").addClass('active');
</script>