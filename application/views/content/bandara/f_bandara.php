<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_bandara'] = "$id";
		$val['kode'] = "";
		$val['kota_bandara'] = "";
		$val['nama_bandara'] = "";
	}
 ?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo $judul; ?></h4>
		</div>
		<div class="modal-body">
		<?php echo form_open($open) ?>
			<div class="form-group">
				<label>Id Bandara</label>
				<input type="text" class="form-control" value="<?php echo $val['id_bandara'] ?>" readonly="" id="id_bandara" name="id_bandara">
			</div>
			<div class="form-group">
				<label>Kode Bandara</label>
				<input type="text" required class="form-control" value="<?php echo $val['kode'] ?>" id="kode" name="kode">
			</div>
			<div class="form-group">
				<label>Kota Bandara</label>
				<input type="text" required class="form-control" value="<?php echo $val['kota_bandara'] ?>" id="kota_bandara" name="kota_bandara">
			</div>
			<div class="form-group">
				<label>Nama Bandara</label>
				<input type="text" required class="form-control" value="<?php echo $val['nama_bandara'] ?>" id="nama_bandara" name="nama_bandara">
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
	function simpan_bandara() {
		$.ajax({
			url:"<?php echo site_url('bandara/simpan_bandara') ?>",
			type:"POST",
			data:{
				id_bandara:$("#id_bandara").val(),
				kode:$("#kode").val(),
				kota_bandara:$("#kota_bandara").val(),
				nama_bandara:$("#nama_bandara").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/bandara/page/bandara";
			}
		})
	}
	function edit_bandara() {
		$.ajax({
			url:"<?php echo site_url('bandara/edit_bandara') ?>",
			type:"POST",
			data:{
				id_bandara:$("#id_bandara").val(),
				kode:$("#kode").val(),
				kota_bandara:$("#kota_bandara").val(),
				nama_bandara:$("#nama_bandara").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/bandara/page/bandara";
			}
		})
	}
</script>