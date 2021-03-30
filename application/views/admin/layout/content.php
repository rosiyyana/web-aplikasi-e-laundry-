<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h6 class="m-b-10"><?php echo $title ?></h6>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dasbor') ?>"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"><?php echo $title ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ sample-page ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body" style="background-image:linear-gradient(to right,#a4ebf3, #e4d3cf, #e4fbff);">
                        <?php 
            			// memanggil data isi content dari controller varible ISI
            			if ($isi) 
            			{
            				$this->load->view($isi);
            			}
            			?>
                    <!-- <img class="float-right" src="<?php echo base_url(); ?>assets/upload/images/admin.svg" style="width: 200px;margin-top:-130px;"> -->
                    <!-- <img class="float-left" src="<?php echo base_url(); ?>assets/upload/images/admin.svg" style="width: 170px;margin-top:-133px;"> -->
                    </div>         
                </div>
            </div>
            <!-- [ sample-page ] end -->
            <img class="mt-0 ml-3" src="<?php echo base_url(); ?>assets/upload/images/admin.svg" style="width: 170px;padding-top:-100px;">

            <div class="card ml-4 pt-3 mt-5">
            <div class="card-body">
                <!-- Jumlah Pelanggan : <?php $i = 0;
                                        foreach($pelanggan as $pelanggan){
                                            $i++;
                                        }?>
                                         <h4><?= $i ?></h4> -->
                        
            </div>
            </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->