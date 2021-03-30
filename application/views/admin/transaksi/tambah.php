
<?php  
// return open
echo form_open_multipart(base_url('admin/transaksi/tambah'),' class="form-horizontal"');
?>

    <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="Nama Outlet">Nama Outlet</label>
            <select name="id_outlet" class="form-control">
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
            <label class="floating-label" for="Nama Outlet">Nama Paket</label>
            <select name="id_paket" class="form-control">
                <option value=""></option>
              <?php foreach ($paket as $paket) { ?>
              <option value="<?php echo $paket->id_paket ?>">
                <?php echo $paket->nama_paket ?> 
              </option>
              <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="kode invoice">Kode Invoice</label>
            <input type="text" class="form-control" name="kode_invoice" value="<?php echo set_value('kode_invoice') ?>" required>
        </div>
    </div>
    <!-- <div class="col-sm-6">
        <div class="form-group">
            <label class="col-md-4 control-label" for="batas waktu">Batas Waktu</label>
            <input type="number" name="batas_waktu" class="form-control" value="<?php echo set_value('batas_waktu').date('l, d-M-Y / H:i:s a');?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="biaya tambahan">Biaya Tambahan</label>
            <input type="number" class="form-control" name="biaya_tambahan" value="<?php echo set_value('biaya_tambahan');?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="pajak">Pajak</label>
            <input type="number" class="form-control" name="pajak" value="<?php echo set_value('pajak');?>" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="status">Status</label>
            <input type="text" class="form-control" name="status" value="<?php echo set_value('status');?>" required>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="dibayar">Dibayar</label>
            <input type="number" class="form-control" name="dibayar" value="<?php echo set_value('dibayar');?>" required>
        </div>
    </div>
    
    <div class="col-sm-6">
        <div class="form-group">            
            <label class="floating-label" for="Nama Pelanggan">Nama Pelanggan</label>
            <select name="id_pelanggan" class="form-control">
              <option value="id_pelanggan"></option>
              <?php foreach ($pelanggan as $pelanggan) { ?>
              <option value="<?php echo $pelanggan->id_pelanggan ?>">
                <?php echo $pelanggan->nama_pelanggan?> 
              </option>
              <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label class="floating-label" for="dibayar">Harga</label>
            <input type="number" class="form-control" name="harga" value="<?php echo set_value('harga');?>" required>
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