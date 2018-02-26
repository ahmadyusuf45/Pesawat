<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Daftar Penerbangan</h4>
		</div>
		<div class="modal-body">
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
				<th>Type Pesawat</th>
				<th>Tempat Bandara</th>
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
			 	<td>
			 		<button data-dismiss="modal" class="btn btn-warning" onclick="ambil_id('<?php echo $data->id_penerbangan ?>')">Data +</button>
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
	function cari_penerbangan() {
		$.ajax({
			url:"<?php echo site_url('tarif/cari_penerbangan') ?>",
			type:"POST",
			dataType:"json",
			data:{
				id_penerbangan:$("#id_penerbangan").val()
			},
			success:function (data) {
				$("#kota_bandara").val(data.kota_bandara);
				$("#type_pesawat").val(data.type_pesawat);
				$("#tgl_penerbangan").val(data.tgl_penerbangan);
				$("#asal").val(data.asal);
				$("#tujuan").val(data.tujuan);
				$("#jam_tiba").val(data.jam_tiba);
				$("#jam_berangkat").val(data.jam_berangkat);
				// $("#c_kelas").val(data.kelas);
				// c_kelas();
			}
		})
	}
	function ambil_id(id) {
		document.getElementById('id_penerbangan').value=id;
		cari_penerbangan();	
	}
	// function c_kelas() {
	// 	kelas = $("#c_kelas").val();
	// 	if(kelas == 'BISNIS'){
	// 		$("#bisnis").css({"display":"none"});
	// 		$("#ekonomi").css({"display":"block"});
	// 		$("#null").css({"display":"none"})
	// 	}else if(kelas == 'EKONOMI'){
	// 		$("#bisnis").css({"display":"block"});
	// 		$("#ekonomi").css({"display":"none"});
	// 		$("#null").css({"display":"none"})
	// 	}else{
	// 		$("#null").css({"display":"block"})
	// 		$("#bisnis").css({"display":"block"});
	// 		$("#ekonomi").css({"display":"block"});
	// 	}
	// }
</script>