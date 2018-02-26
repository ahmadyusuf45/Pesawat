 <div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Bandara</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modal-skin" onclick="modal('<?php echo site_url('bandara/page/f_bandara') ?>')">Input Data +</button>
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
				<th>Id Bandara</th>
				<th>Kode Bandara</th>
				<th>Kota Bandara</th>
				<td>Nama Bandara</td>
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
			 	<td><?php echo $data->id_bandara ?></td>
			 	<td><?php echo $data->kode ?></td>
			 	<td><?php echo $data->kota_bandara ?></td>
			 	<td><?php echo $data->nama_bandara ?></td>
			 	<td>
			 		<button type="button" data-toggle="modal" data-target="#modal-skin" class="btn btn-warning " onclick="modal('<?php echo site_url('bandara/page/f_bandara') ?>/<?php echo $data->id_bandara ?>')"><i class="fa fa-pencil-square-o"></i></button>
			 		<!-- <button class="btn btn-danger" onclick="hapus_bandara('<?php echo $data->id_bandara ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
			 		<a href="<?php echo site_url('bandara/hapus_bandara/') ?><?php echo $data->id_bandara ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Menghapus Data Ini ?')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
function hapus_bandara(id) {
		$.ajax({
			url:"<?php echo site_url('bandara/hapus_bandara') ?>",
			type:"GET",
			data:{
				id_bandara:id
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/bandara/page/bandara";
			}
		})
	}
</script>