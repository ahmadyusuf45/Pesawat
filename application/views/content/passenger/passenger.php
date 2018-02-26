          <?php 
  $hsl = $item->row_array();
  $m = $hsl['jml_penumpang'];
  $kl = $hsl['kelas'];
  $ml = $hsl['id_penerbangan'];
  $kkk = $hsl['total_tarif'];
 ?>
          <div class="row">
            <div class="col-lg-12">
              <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Detail Booking Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <div class="table-responsive">
                   <table class="table table-bordered">
                      <thead>
      <tr>
        <th>No</th>
        <th>Kelas</th>
        <th>Nama Pesawat</th>
        <th>Kota Bandara</th>
        <th>Nama Bandara</th>
        <th>Tanggal Penerbangan</th>
        <th>Asal Penerbangan</th>
        <th>Tujuan Penerbangan</th>
        <th>Jam Berangkat</th>
        <th>Jam Tiba</th>
        <th>Tarif</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $no = 0;
        foreach ($tmp as $data) {$no++;
       ?>
       <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data->kelas ?></td>
        <td><?php echo $data->type_pesawat ?></td>
        <td><?php echo $data->kota_bandara ?></td>
        <td><?php echo $data->nama_bandara ?></td>
        <td><?php echo $data->tgl_penerbangan ?></td>
        <td><?php echo $data->asal ?></td>
        <td><?php echo $data->tujuan ?></td>
        <td><?php echo $data->jam_berangkat ?></td>
        <td><?php echo $data->jam_tiba ?></td>
        <td>IDR <?php echo $data->tarif ?></td>
       </tr>
       <?php } ?>
    </tbody>
                   </table>
                   <table class="table">
                     <tbody>
                        <tr>
         <td colspan="8"></td>
         <td>Jumlah Penumpang</td>
         <td><b><?php echo $m ?> Orang</b></td>
       </tr>
       <tr>
         <td colspan="8"></td>
         <td>Total Tarif</td>
         <td><b>IDR <?php echo $kkk ?> </b></td>
       </tr>
                     </tbody>
                   </table>
                 </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
           <?php 
  echo form_open('passenger/simpan_passenger');
  ?>
 <input type="text" id="jml_penumpang" hidden=""  value="<?php echo $m ?>" name="jml_penumpang">
 <?php
  if($kl == 'EKONOMI'){
    $no_kursi = $eko;
  }else{
    $no_kursi = $bis;
  } 
  $no = 0;
  for ($i=0; $i < $m; ) { 
  $i++;
  $no++;
  $no_kursi++;
  ?>
           <div class="row">
            <div class="col-lg-12">
              <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Data Passanger</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">

                      <div class="form-horizontal">
                        <input type="text" id="id_detail" hidden=""  value="<?php echo $hsl['id_detail'] ?>" name="id_detail[]">
      <div class="form-group">
          <label class="col-sm-2 control-label">Nama Penumpang</label>
            <div class="col-sm-10">
                <input type="text" required class="form-control" id="nama_passenger[]" name="nama_passenger[]" placeholder="">
            </div>
        </div>
      <div class="form-group">
          <label class="col-sm-2 control-label">Nomor Kursi</label>
            <div class="col-sm-10">
               <!--  <input required type="text" id="nomor_kursi_<?php echo $no; ?>" onclick="modal('<?php echo site_url('passenger/modal_kursi') ?>/<?php echo $ml ?>/<?php echo "nomor_kursi_".$no; ?>')"  data-toggle="modal" data-target="#modal-skin" value="" class="form-control" name="nomor_kursi[]"> -->
               <input type="text" class="form-control" required value="<?php echo $no_kursi ?>" name="nomor_kursi[]">
            </div>
        </div>
        
      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
            </div><!-- /.col -->
          </div><!-- /.row -->
          <?php } ?>
          <div class="row">
            <div class="col-md-12">
  <input type="submit" class="btn btn-primary" value="Cetak Tiket" onclick="tiket_passenger()" name="">
</div>
          </div>
          <?php echo form_close(); ?>
<script type="text/javascript">
  function tiket_passenger() {
    id = $("#id_detail").val();
    window.open('<?php echo site_url('passenger/tiket') ?>'+"/"+id);
  }
</script>