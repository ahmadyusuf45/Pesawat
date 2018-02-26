		<div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Tarif Penerbangan</h3>
                    <div class="box-tools pull-right">
                    	<a class="btn btn-primary btn-sm" href="<?php echo site_url('tarif/page/f_tarif') ?>">Input Data +</a>
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
				<th>Kelas</th>
				<th>Nama Pesawat</th>
				<th>Nama Bandara</th>
				<th>Tempat Bandara</th>
				<th>Tanggal Penerbangan</th>
				<th>Asal Penerbangan</th>
				<th>Tujuan Penerbangan</th>
				<th>Jam Berangkat</th>
				<th>Jam Tiba</th>
				<th>Tarif</th>
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
			 	<td><?php echo $data->kelas ?></td>
			 	<td><?php echo $data->type_pesawat ?></td>
			 	<td><?php echo $data->nama_bandara ?></td>
			 	<td><?php echo $data->kota_bandara ?></td>
			 	<td><?php echo $data->tgl_penerbangan ?></td>
			 	<td><?php echo $data->asal ?></td>
			 	<td><?php echo $data->tujuan ?></td>
			 	<td><?php echo $data->jam_berangkat ?></td>
			 	<td><?php echo $data->jam_tiba ?></td>
			 	<td>IDR <?php echo $data->tarif ?></td>
			 	<td>
			 		<!-- <button class="btn btn-danger" onclick="hapus_tarif_penerbangan('<?php echo $data->id_tarif ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
			 		<a href="<?php echo site_url('tarif/hapus_tarif/') ?><?php echo $data->id_tarif ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus Data Ini ?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
		function hapus_tarif_penerbangan(id) {
		$.ajax({
			url:"<?php echo site_url('tarif/hapus_tarif') ?>",
			type:"GET",
			data:{
				id_tarif:id
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/tarif/page/tarif";
			}
		})
	}
</script>