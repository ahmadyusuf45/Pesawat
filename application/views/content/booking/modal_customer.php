<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Daftar Customer</h4>
		</div>
		<div class="modal-body">
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
			 		<button type="button" data-toggle="modal" data-target="#modal-skin" class="btn btn-info" onclick="ambil_id('<?php echo $data->id_customer ?>')">Data +</button>
			 	</td>
			 	<?php } ?>
			 </tr>
		</tbody>
	</table>
</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$("#table").DataTable();
	})
	function cari_customer() {
		$.ajax({
			url:"<?php echo site_url('booking/cari_customer') ?>",
			type:"POST",
			dataType:"json",
			data:{
				id_customer:$("#id_customer").val()
			},
			success:function (data) {
				$("#nama").val(data.nama);
				$("#email").val(data.email);
				$("#negara").val(data.negara);
				$("#kota").val(data.kota)
			}
		})
	}
	function ambil_id(id) {
		document.getElementById('id_customer').value=id;
		cari_customer();
	}
</script>