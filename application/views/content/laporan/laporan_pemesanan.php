 <div class="row">
            <div class="col-lg-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Laporan Pemesanan</h3>
                    <div class="box-tools pull-right">
              
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="col-md-6">
  <div class="col-sm-4">
    <div class="form-group">
    <select class="form-control input-sm" id="pencarian" onchange="pencarian_m()">
      <option>---Pencarian---</option>
      <option value="Bulan" id="Bulan">Bulan</option>
      <option value="Tanggal" id="Tanggal">Tanggal</option>
    </select>
    </div>
  </div>
</div>
<div class="col-md-6">
  <div class="col-sm-12">
      <div class="form-inline" id="tgl" style="display: none;">
          <div class="form-group">
            <input type="date" class="form-control input-sm" id="tgl_awal" value=""  name="awal">
          </div>
          <div class="form-group">
            <input type="date" id="tgl_akhir" class="form-control input-sm" value="" onchange="cari_lap_tanggal();"  name="akhir">
          </div>
            <!-- <input name="cari" type="submit" value="Cari" class="btn btn-danger btn-sm"> -->
            <a href="javascript:cetak('table_out')" class="btn btn-primary">Cetak</a>
      </div>
      <div class="form-inline" id="bulan" style="display: none;">
        
          <div class="form-group">
            <select class="form-control" id="bulan_c" onchange="cari_lap_bulan()">
              <option value="">----Bulan----</option>
              <option value="01">Januari</option>
              <option value="02">Febuari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">November</option>
              <option value="11">Oktober</option>
              <option value="12">Desember</option>
            </select>
          </div>
          <div class="form-group">
            <select class="form-control" id="tahun_c" onchange="cari_lap_bulan()">
              <?php 
                $muali = date('Y') - 19;
                for ($i= $muali; $i < $muali +20; $i++) { 
                  $sel = $i == date('Y') ? 'selected ="selected" ' : '' ;
                  echo '<option value= "'.$i.'"'.$sel.'>'.$i.'</option>';
                }
               ?>
            </select>
          </div>
        <!--    <input name="cari" type="submit" value="Cari" class="btn btn-danger btn-sm"> -->
            <a href="javascript:cetak('table_out')" class="btn btn-primary">Cetak</a>
        
      </div>
  </div>
</div>
<div class="col-md-12 table-responsive"  id="table_out">

</div>
<iframe src="about:blank" id="printing-frame" name="print_frame" style="display: none;"></iframe>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->\
<script type="text/javascript">
  function cetak(id) {
    var b = document.getElementById(id).innerHTML;
    var a = "<?php echo base_url('dist/css/bootstrap.min.css') ?>";
    var c = "<?php echo base_url('dist/js/bootstrap.min.js') ?>";
    var d = "<?php echo base_url('dist/js/jquery-3.2.1.min.js') ?>";
    window.frames["print_frame"].document.title = document.title;
      window.frames["print_frame"].document.body.innerHTML = b;
      window.frames["print_frame"].window.focus();
      window.frames["print_frame"].window.print();
  }
  function pencarian_m() {
    pencarian = $("#pencarian").val();
    if(pencarian == "Bulan"){
      $("#bulan").css({"display":"block"});
      $("#tgl").css({"display":"none"});
    }else if(pencarian == "Tanggal"){
      $("#bulan").css({"display":"none"});
      $("#tgl").css({"display":"block"});
    }else{
      $("#bulan").css({"display":"none"});
      $("#tgl").css({"display":"none"});
    }
  }
  function cari_lap_tanggal() {
    $.ajax({
      url:"<?php echo site_url('laporan/cetak_lap_tanggal_booking'); ?>",
      type:"POST",
      data:{
        tgl_awal:$("#tgl_awal").val(),
        tgl_akhir:$("#tgl_akhir").val()
      },
      success:function (data) {
        $("#table_out").html(data);
      }
    })
  }
  function  cari_lap_bulan() {
    $.ajax({
      url:"<?php echo site_url('laporan/cetak_lap_bulan_booking') ?>",
      type:"POST",
      data:{
        bulan:$("#bulan_c").val(),
        tahun:$("#tahun_c").val()
      },
      success:function (data) {
        $("#table_out").html(data);
      }
    })
  }
</script>