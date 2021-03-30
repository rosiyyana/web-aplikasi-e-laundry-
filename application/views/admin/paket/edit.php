<?php  
// return open
echo form_open_multipart(base_url('admin/paket/edit/'.$paket->id_paket), 'class="form-horizontal"');
?>

    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Nama Outlet">Nama Outlet</label>
            <select name="id_outlet" class="form-control">
              <?php foreach ($outlet as $outlet) { ?>
              <option value="<?php echo $outlet->id_outlet ?>" <?php if($paket->id_outlet==$outlet->id_outlet) { echo "selected"; } ?>>
                <?php echo $outlet->nama_outlet ?> 
              </option>
              <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Jenis Paket">Jenis Paket</label>
            <select class="form-control" name="jenis_paket" aria-label="Default select example">
                <option value=""></option>
                <option value="Paket A (1 kg)" <?php if ($paket->jenis_paket=="Paket A (1 kg)") { echo "selected"; } ?>>Paket A (1 kg)</option>
                <option value="Paket B (1 lusin)" <?php if ($paket->jenis_paket=="Paket B (1 lusin)") { echo "selected"; } ?>>Paket B (1 lusin)</option>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Nama Paket</label>
            <input type="text" class="form-control" name="nama_paket" value="<?php echo $paket->nama_paket ?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Name">Harga</label>
            <input type="number" name="harga" class="form-control" value="<?php echo $paket->harga ?>" required>
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