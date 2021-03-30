<a class="btn btn-icon btn-danger" data-target="#delete-<?php echo $paket->id_paket ?>"  data-toggle="modal"><i class="feather icon-trash-2 text-light"></i></a>

<div class="modal fade" id="delete-<?php echo $paket->id_paket ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Peringatan !!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="callout callout-warning">
	        <p>Yakin akan menghapus data ini? Data yang sudah di hapus tidak 
          dapat <br> dikembalikan.</p>
	     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
        <a href="<?php echo base_url('admin/paket/delete'.$paket->id_paket) ?>" class="btn btn-danger"><i class="fa fa-trash-o">Ya, Hapus Data Ini</i></a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
