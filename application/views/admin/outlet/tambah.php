<?php  
// return open
echo form_open_multipart(base_url('admin/outlet/tambah'),' class="form-horizontal"');
?>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Name</label>
            <input type="text" name="nama_outlet" class="form-control" value="<?php echo set_value('nama_outlet') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Alamat">alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo set_value('alamat') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="No.Telepon">No.Telepon</label>
            <input type="number" name="telp" class="form-control" value="<?php echo set_value('telp') ?>" required>
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