	 	<div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Customer</h3>
                    <div class="box-tools pull-right">
						<button class="btn btn-primary btn-sm"  type="button" data-toggle="modal" data-target="#modal-skin" onclick="modal('<?php echo site_url('customer/page/f_customer') ?>')">Input Data +</button>                        
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
				<th>ID Customer</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Kota</th>
				<th>Negara</th>
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
			 	<td><?php echo $data->id_customer; ?></td>
			 	<td><?php echo $data->nama ?></td>
			 	<td><?php echo $data->email ?></td>
			 	<td><?php echo $data->kota ?></td>
			 	<td><?php echo $data->negara ?></td>
			 	<td>
			 		<button type="button" data-toggle="modal" data-target="#modal-skin" class="btn btn-warning" onclick="modal('<?php echo site_url('customer/page/f_customer') ?>/<?php echo $data->id_customer ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
			 		<!-- <button class="btn btn-danger" onclick="hapus_customer('<?php echo $data->id_customer ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
			 		<a href="<?php echo site_url('customer/hapus_customer/') ?><?php echo $data->id_customer ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
			 	</td>
			 	<?php } ?>
			 </tr>
		</tbody>
	</table>
</div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->		
<script type="text/javascript">
	function hapus_customer(id) {
		$.ajax({
			url:"<?php echo site_url('customer/hapus_customer') ?>",
			type:"GET",
			data:{
				id_customer:id
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/customer/page/customer";
			}
		})
	}
</script>