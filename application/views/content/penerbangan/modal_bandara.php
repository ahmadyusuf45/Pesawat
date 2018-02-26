<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Daftar Bandara</h4>
		</div>
		<div class="modal-body">
			<div class="table-responsive">
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Id Bandara</th>
				<th>Kode Bandara</th>
				<th>Kota Bandara</th>
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
			 	<td>
			 		<button type="button" data-dismiss="modal" class="btn btn-warning " onclick="ambil_id('<?php echo $data->id_bandara ?>')">Data +</button>
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
	function cari_bandara() {
		$.ajax({
			url:"<?php echo site_url('penerbangan/cari_bandara') ?>",
			type:"POST",
			dataType:"json",
			data:{
				id_bandara:$("#id_bandara").val()
			},
			success:function (data) {
				$("#kode").val(data.kode);
				$("#kota_bandara").val(data.kota_bandara);
				$("#nama_bandara").val(data.nama_bandara);
			}
		})
	}
	function ambil_id(id) {
		document.getElementById('id_bandara').value=id;
		cari_bandara();
	}
</script>