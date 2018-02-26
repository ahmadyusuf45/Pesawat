 		<div class="row">
            <div class="col-lg-4">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Bandara</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
				<div class="form-group">
					  <?php echo form_open('penerbangan/simpan_penerbangan') ?>
					<label>ID Bandara</label>
						<input type="text" placeholder="Klik Cari Bandara" data-toggle="modal" data-target="#modal-skin" onclick="modal('<?php echo site_url('penerbangan/tmp_bandara') ?>')" class="form-control" id="id_bandara" name="id_bandara" readonly="">
				</div>
				<div class="form-group">
					<label>Kode Bandara</label>
						<input type="text" class="form-control" id="kode" name="" readonly="">
				</div>	
				<div class="form-group">
			 		<label>Tempat Bandara</label>
			 			<input type="text" class="form-control" id="kota_bandara" name="" readonly="">
				</div>
				<div class="form-group">
					<label>Nama Bandara</label>
						<input type="text" id="nama_bandara" class="form-control" name="" readonly="">
				</div>		
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-lg-4">
              <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Pesawat</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
				<div class="form-group">
					<label>ID Pesawat</label>
						<input type="text" class="form-control" placeholder="Klik Cari Pesawat" data-toggle="modal" data-target="#modal-skin" onclick="modal('<?php echo site_url('penerbangan/tmp_pesawat') ?>')" id="id_pesawat" name="id_pesawat" readonly="">
				</div>
				<div class="form-group">
					<label>Nama Pesawat</label>
						<input type="text" class="form-control" id="type_pesawat"  name="" readonly="">
				</div>
				<div class="form-group">
					<label>Jumlah Kursi Bisnis</label>
						<input type="text" class="form-control" id="jml_kursi_bisnis" name="" readonly="">
				</div>
				<div class="form-group">
					<label>Jumlah Kursi Ekonomi</label>
						<input type="text" class="form-control" id="jml_kursi_ekonomi" name="" readonly="">
				</div>	 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-lg-4">
              <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
        
                <div class="form-group">
					<label>ID Penerbangan</label>
						<input type="text" required class="form-control" id="id_penerbangan" value="<?php echo $id; ?>" name="id_penerbangan">
				</div>
				<div class="form-group">
					<label>Tanggal Penerbangan</label>
						<input type="date" required class="form-control" id="tgl_penerbangan" name="tgl_penerbangan">
				</div>
				<div class="form-group">
					<label>Asal Penerbangan</label>
						<input type="text" required class="form-control" id="asal" name="asal">
				</div>
				<div class="form-group">
					<label>Tujuan Penerbangan</label>
						<input type="text" required class="form-control" id="tujuan" name="tujuan">
				</div>	
				<div class="form-group">
					<label>Jam Keberangkatan</label>
						<input type="time" required class="form-control" id="jam_berangkat" name="jam_berangkat">
				</div>
				<div class="form-group">
					<label>Jam Tiba</label>
						<input type="time" required class="form-control" id="jam_tiba" name="jam_tiba">
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
	function simpan_penerbangan() {
		$.ajax({
			url:"<?php echo site_url('penerbangan/simpan_penerbangan') ?>",
			type:"POST",
			data:{
				id_penerbangan:$("#id_penerbangan").val(),
				tgl_penerbangan:$("#tgl_penerbangan").val(),
				asal:$("#asal").val(),
				tujuan:$("#tujuan").val(),
				jam_berangkat:$("#jam_berangkat").val(),
				jam_tiba:$("#jam_tiba").val(),
				id_bandara:$("#id_bandara").val(),
				id_pesawat:$("#id_pesawat").val()
			},
			success:function (data) {
				document.location="http://localhost/coba/index.php/penerbangan/page/penerbangan";
			}
		})
	}
</script>