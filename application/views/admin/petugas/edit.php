<?php  
// notifikasi eror
echo validation_errors('<div class=alert alert-warning>','</div>');

// return open
echo form_open_multipart(base_url('admin/petugas/edit/'.$petugas->id_petugas), ' class="form-horizontal"');
?>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Name</label>
            <input type="text" name="nama_petugas" class="form-control" value="<?php echo $petugas->nama_petugas ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group fill">
            <label class="floating-label" for="Password">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $petugas->password ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Username">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $petugas->username ?>" readonlye>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Level">Level Hak Akses</label>
            <select name="level" class="form-control">
              <option value="Admin" <?php if ($petugas->level=="Admin") { echo "selected"; } ?>>Admin</option>
              <option value="Petugas" <?php if ($petugas->level=="Petugas") { echo "selected"; } ?>>Petugas</option>
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