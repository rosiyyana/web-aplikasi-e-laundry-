<?php  
// return open
echo form_open_multipart(base_url('admin/paket/tambah'),' class="form-horizontal"');
?>

    <div class="row">
    
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Nama Outlet">Nama Outlet</label>
            <select name="id_outlet" class="form-control">
              <option value="id_outlet"></option>
              <?php foreach ($outlet as $outlet) { ?>
              <option value="<?php echo $outlet->id_outlet ?>">
                <?php echo $outlet->nama_outlet ?> 
              </option>
              <?php } ?>
            </select>
        </div>
    </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label class="floating-label" for="Name">Jenis Paket</label>
                <select class="form-control" name="jenis_paket" aria-label="Default select example">
                    <option value=""></option>
                    <option value="Paket A (1 kg)">Paket A (1 kg)</option>
                    <option value="Paket B (1 lusin)">Paket B (1 lusin)</option>
                </select>
            </div>
        </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Nama Paket</label>
            <input type="text" class="form-control" name="nama_paket" value="<?php echo set_value('nama_paket') ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo set_value('harga') ?>" required>
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