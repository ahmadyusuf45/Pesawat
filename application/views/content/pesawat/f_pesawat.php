<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_pesawat'] = "$id";
		$val['type_pesawat'] = "";
		$val['jml_kursi_ekonomi'] = "";
		$val['jml_kursi_bisnis'] = "";	
	}
 ?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo $judul ?></h4>
		</div>
		<div class="modal-body">
			<?php echo form_open($open) ?>
			<div class="form-group">
				<label>Id Pesawat</label>
				<input type="text" class="form-control" id="id_pesawat" readonly="" value="<?php echo $val['id_pesawat'] ?>" name="id_pesawat" required>
			</div>
			<div class="form-group">
				<label>Nama Pesawat</label>
				<input type="text" class="form-control" id="type_pesawat" value="<?php echo $val['type_pesawat'] ?>" name="type_pesawat" required>
			</div>
			<div class="form-group">
				<label>Jumlah Kursi Ekonomi</label>
				<input type="number" class="form-control" id="jml_kursi_ekonomi" value="<?php echo $val['jml_kursi_ekonomi'] ?>" name="jml_kursi_ekonomi" required>
			</div>
			<div class="form-group">
				<label>Jumlah Kursi Bisnis</label>
				<input type="number" class="form-control" id="jml_kursi_bisnis" value="<?php echo $val['jml_kursi_bisnis'] ?>" name="jml_kursi_bisnis" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-info" value="<?php echo $value ?>" name="">
				<button class="btn btn-warning btn-fill" data-dismiss="modal">Batal</button>
			</div>
			<?php echo form_close() ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	function simpan_pesawat() {
		$.ajax({
			url:"<?php echo site_url('pesawat/simpan_pesawat') ?>",
			type:"POST",
			data:{
				id_pesawat:$("#id_pesawat").val(),
				type_pesawat:$("#type_pesawat").val(),
				jml_kursi_ekonomi:$("#jml_kursi_ekonomi").val(),
				jml_kursi_bisnis:$("#jml_kursi_bisnis").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/pesawat/page/pesawat";
			}
		})
	}
	function edit_pesawat() {
		$.ajax({
			url:"<?php echo site_url('pesawat/edit_pesawat') ?>",
			type:"POST",
			data:{
				id_pesawat:$("#id_pesawat").val(),
				type_pesawat:$("#type_pesawat").val(),
				jml_kursi_ekonomi:$("#jml_kursi_ekonomi").val(),
				jml_kursi_bisnis:$("#jml_kursi_bisnis").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/pesawat/page/pesawat";
			}
		})
	}
</script>