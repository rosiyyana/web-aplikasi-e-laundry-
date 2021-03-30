<?php  
// notifikasi eror
echo validation_errors('<div class="alert alert-warning">', '</div>');
//error upload
// if (isset($error)){
//    echo '<p class="alert alert-warning">';
//    echo $error;
//    '</p>';
// }
// return open
echo form_open_multipart(base_url('admin/petugas/tambah'),' class="form-horizontal"');
?>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Name</label>
            <input type="text" name="nama_petugas" class="form-control" value="<?php echo set_value('nama_petugas') ?>" required>
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
            <label class="floating-label" for="Username">Username</label>
            <input type="text" name="username" class="form-control" value="<?php echo set_value('username') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Level">Level Hak Akses</label>
            <select name="level" class="form-control">
              <option value=""></option>
              <option value="Admin">Admin</option>
              <option value="Petugas">Petugas</option>
              <option value="Owner">Owner</option>             
            </select>
        </div>
    </div>
    <!-- <div class="col-sm-6">
        <div class="form-group">
            <label class="col-md-4 control-label" for="upload">Upload Image</label>
            <input type="file" name="gambar" class="form-control" value="<?php echo set_value('image') ?>" required>
        </div>
    </div> -->
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