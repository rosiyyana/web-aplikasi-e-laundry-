<?php  
// notifikasi eror
echo validation_errors('<div class="alert alert-warning">', '</div>');

// return open
echo form_open_multipart(base_url('admin/pelanggan/tambah'),' class="form-horizontal"');
?>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Name</label>
            <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo set_value('nama_pelanggan') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group fill">
            <label class="floating-label" for="Password">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Email">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo set_value('email') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Telepon">Telepon</label>
            <input type="number" name="telepon" class="form-control" value="<?php echo set_value('telepon') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo set_value('alamat') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Level">Level Hak Akses</label>
            <select name="level" class="form-control">
              <option value=""></option>
              <option value="Admin">Admin</option>
              <option value="petugas">Petugas</option>
              <option value="pelanggan">Pelanggan</option>
            </select>
        </div>
    </div>
    <div class="col-sm-12">
        <button class="btn btn-success" name="submit" type="submit">
          <i class="fa fa-save"></i> Simpan
        </button>
        <button class="btn btn-info" name="reset" type="reset">
          <i class="fa fa-times"></i> Reset
        </button>
    </div>
</div>

<?php echo form_close(); ?>