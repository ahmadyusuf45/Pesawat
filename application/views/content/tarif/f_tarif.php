 		<div class="row">
            <div class="col-xs-6">
              <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                	<?php echo form_open('tarif/simpan_tarif') ?>
				<div class="form-group">
					<label>ID Penerbangan</label>
						<input type="text" data-toggle="modal" placeholder="Klik Cari Penerbangan" data-target="#modal-skin" onclick="modal('<?php echo site_url('tarif/tmp_penerbangan') ?>')" class="form-control" id="id_penerbangan" value="" readonly="" name="id_penerbangan">
				</div>
				<div class="form-group">
					<label>Tanggal Penerbangan</label>
						<input type="date" class="form-control" id="tgl_penerbangan" name="" readonly="">
				</div>
				<div class="form-group">
					<label>Asal Penerbangan</label>
						<input type="text" class="form-control" id="asal" name="" readonly="">
				</div>
				<div class="form-group">
					<label>Tujuan Penerbangan</label>
						<input type="text" class="form-control" id="tujuan" name="" readonly="">
				</div>	
				<div class="form-group">
					<label>Jam Keberangkatan</label>
						<input type="time" class="form-control" id="jam_berangkat" name="" readonly="">
				</div>
				<div class="form-group">
					<label>Jam Tiba</label>
						<input type="time" class="form-control" id="jam_tiba" name="" readonly="">
				</div>	
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-xs-6">
              <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Tarif Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                	
                  	<div class="form-group">
						<label>ID Tarif Penerbangan</label>
							<input type="text" class="form-control" value="<?php echo $id ?>" id="id_tarif" name="id_tarif" required>
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<!-- <input type="text" id="c_kelas" name="" hidden="" > -->
							<select class="form-control" id="kelas" name="kelas" required>
								<option>---PILIH---</option>
									<option id="bisnis" value="BISNIS">BISNIS</option>
									<option id="ekonomi" value="EKONOMI">EKONOMI</option>
							</select>
					</div>
					<div class="form-group">
						<label>Tarif Penerbangan</label>
							<input type="number" class="form-control" id="tarif" name="tarif" required>
					</div>
					<div class="form-group">
							<input type="submit" class="btn btn-info form-control" value="Simpan Data" name="">
					</div>
					<?php echo form_close() ?>		
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
<script type="text/javascript">
	function simpan_tarif() {
		$.ajax({
			url:"<?php echo site_url('tarif/simpan_tarif') ?>",
			type:"POST",
			data:{
				id_tarif:$("#id_tarif").val(),
				id_penerbangan:$("#id_penerbangan").val(),
				kelas:$("#kelas").val(),
				tarif:$("#tarif").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/tarif/page/tarif";
			}
		})
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
	// 		$("#bisnis").css({"display":"none"});
	// 		$("#ekonomi").css({"display":"none"});
	// 	}
	// }
</script>