 		<div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Pesawat</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modal-skin" onclick="modal('<?php echo site_url('pesawat/page/f_pesawat') ?>')">Input Data +</button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<?php 
                		if($this->session->flashdata('success')){
                	 ?>
                	 <div class="alert alert-success" role="alert" style="opacity: 0.5">
                	 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                	<?php echo $this->session->flashdata('success') ?>
                	</div>
                	 <?php } ?>
                  		<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Id Pesawat</th>
				<th>Nama Pesawat</th>
				<th>Jumlah Kursi Ekonomi</th>
				<th>Jumlah Kursi Bisnis</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no = 0;
				foreach ($tmp as $data) {$no++;
			 ?>
			 <tr>
			 	<td><?php echo $no; ?></td>
			 	<td><?php echo $data->id_pesawat ?></td>
			 	<td><?php echo $data->type_pesawat ?></td>
			 	<td><?php echo $data->jml_kursi_ekonomi ?> Kursi</td>
			 	<td><?php echo $data->jml_kursi_bisnis ?> Kursi</td>
			 	<td>
			 		<button  type="button" data-toggle="modal" data-target="#modal-skin" class="btn btn-warning" onclick="modal('<?php echo site_url('pesawat/page/f_pesawat') ?>/<?php echo $data->id_pesawat; ?>')"><i class="fa fa-pencil-square-o"></i></button>
			 		<!-- <button class="btn btn-danger" onclick="hapus_pesawat('<?php echo $data->id_pesawat ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
			 		<a  href="<?php echo site_url('pesawat/hapus_pesawat/') ?><?php echo $data->id_pesawat ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus Data Ini ?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
			 	</td>
			 </tr>
			 <?php } ?>
		</tbody>
	</table>
</div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->			
<script type="text/javascript">
		function hapus_pesawat(id) {
		if (confirm('coba')) {

		}else{	
		$.ajax({
			url:"<?php echo site_url('pesawat/hapus_pesawat') ?>",
			type:"GET",
			data:{
				id_pesawat:id
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/pesawat/page/pesawat";
			}
		})
	}
	}
	
</script>