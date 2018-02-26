<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Daftar Pesawat</h4>
		</div>
		<div class="modal-body">
				<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Id Pesawat</th>
				<th>Type Pesawat</th>
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
			 	<td><?php echo $data->jml_kursi_ekonomi ?></td>
			 	<td><?php echo $data->jml_kursi_bisnis ?></td>
			 	<td>
			 		<button type="button" data-dismiss="modal" class="btn btn-warning" onclick="ambil_id('<?php echo $data->id_pesawat ?>')" >Data +</button>
			 	</td>
			 </tr>
			 <?php } ?>
		</tbody>
	</table>
</div>	
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$("#table").DataTable();
	});
	function cari_pesawat() {
		$.ajax({
			url:"<?php echo site_url('penerbangan/cari_pesawat') ?>",
			type:"POST",
			dataType:"json",
			data:{
				id_pesawat:$("#id_pesawat").val()
			},
			success:function (data) {
				$("#type_pesawat").val(data.type_pesawat);
				$("#jml_kursi_ekonomi").val(data.jml_kursi_ekonomi);
				$("#jml_kursi_bisnis").val(data.jml_kursi_bisnis);
			}
		})
	}
	function ambil_id(id){
		document.getElementById('id_pesawat').value=id;
		cari_pesawat();
	}
</script>