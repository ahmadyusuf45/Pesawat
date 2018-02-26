	 	<div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Penerbangan</h3>
                    <div class="box-tools pull-right">
                    	<a class="btn btn-primary btn-sm" href="<?php echo site_url('penerbangan/page/f_penerbangan') ?>">Input Data +</a>
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
	<table class="table table-bordered table-sm" id="table">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Penerbangan</th>
				<th>Tanggal Penerbangan</th>
				<th>Asal Penerbangan</th>
				<th>Tujuan Penerbangan</th>
				<th>Jam Berangakat</th>
				<th>Jam Tiba</th>
				<th>Nama Pesawat</th>
				<th>Tempat Bandara</th>
				<th>Nama Bandara</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no = 0;
				foreach ($tmp as $data) {$no++;
			 ?>
			 <tr>
			 	<td><?php echo $no ?></td>
			 	<td><?php echo $data->id_penerbangan ?></td>
			 	<td><?php echo $data->tgl_penerbangan ?></td>
			 	<td><?php echo $data->asal ?></td>
			 	<td><?php echo $data->tujuan ?></td>
			 	<td><?php echo $data->jam_berangkat ?></td>
			 	<td><?php echo $data->jam_tiba ?></td>
			 	<td><?php echo $data->type_pesawat ?></td>
			 	<td><?php echo $data->kota_bandara ?></td>
			 	<td><?php echo $data->nama_bandara ?></td>
			 	<td>
			 		<!-- <button class="btn btn-danger" onclick="hapus_penerbangan('<?php echo $data->id_penerbangan ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
			 		<a href="<?php echo site_url('penerbangan/hapus_penerbangan/') ?><?php echo $data->id_penerbangan ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus Data Ini ?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
		function hapus_penerbangan(id) {
		$.ajax({
			url:"<?php echo site_url('penerbangan/hapus_penerbangan') ?>",
			type:"GET",
			data:{
				id_penerbangan:id
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/penerbangan/page/penerbangan";
			}
		})
	}
</script>