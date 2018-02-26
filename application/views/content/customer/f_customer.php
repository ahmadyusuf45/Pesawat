<?php 
	if($status == 'edit'){
		$val = $hsl->row_array();
	}else{
		$val['id_customer']="$id";
		$val['nama'] = "";
		$val['email'] = "";
		$val['kota'] = "";
		$val['negara'] = "";
	}
 ?>
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="modal('','tutup')"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"><?php echo $judul; ?></h4>
		</div>
		<div class="modal-body">
			<?php echo form_open($open); ?>
			<div class="form-group">
				<label>Id Customer</label>
				<input type="text" class="form-control" readonly="" id="id_customer" value="<?php echo $val['id_customer'] ?>" name="id_customer" required>
			</div>
			<div class="form-group">
				<label>Nama</label>

				<input type="text" required class="form-control" id="nama" value="<?php echo $val['nama'] ?>" name="nama">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" required class="form-control" id="email" value="<?php echo $val['email'] ?>" name="email">
			</div>
			<div class="form-group">
				<label>Kota</label>
				<input type="text" required class="form-control" id="kota" value="<?php echo $val['kota'] ?>" name="kota">
			</div>
			<div class="form-group">
				<label>Negara</label>
				<input type="text" class="form-control"	id="negara" value="<?php echo $val['negara'] ?>" name="negara" required>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-info" value="<?php echo $value; ?>" name="">
				<button class="btn btn-warning btn-fill" data-dismiss="modal">Batal</button>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	function simpan_customer() {
		$.ajax({
			url:"<?php echo site_url('customer/simpan_customer') ?>",
			type:"POST",
			data:{
				id_customer:$("#id_customer").val(),
				nama:$("#nama").val(),
				email:$("#email").val(),
				kota:$("#kota").val(),
				negara:$("#negara").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/customer/page/customer";
			}
		})
	}
	function edit_customer() {
		$.ajax({
			url:"<?php echo site_url('customer/edit_customer') ?>",
			type:"POST",
			data:{
				id_customer:$("#id_customer").val(),
				nama:$("#nama").val(),
				email:$("#email").val(),
				kota:$("#kota").val(),
				negara:$("#negara").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/customer/page/customer";
			}
		})	
	}
</script>