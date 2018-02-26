           <div class="row">
            <div class="col-xs-12">
              <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Jadwal Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
                    <div class="form-iniline">
                          <?php echo form_open('booking/page/f_booking') ?>
                          <div class="form-group">
                            <input type="text"  class="form-control" value="<?php echo $this->input->post('asal') ?>" name="asal" id="kota_asal" placeholder="Kota Asal">
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $this->input->post('tujuan') ?>" name="tujuan" id="kota_tujuan" placeholder="Kota Tujuan">
                          </div>
                          <input type="submit" class="btn btn-info" value="Cari" name="">
                           <button class="btn btn-warning" onclick="kosong()">Reset</button>
                        <?php echo form_close() ?>
                        </div>
                 <br>
                  <div class="table-responsive">
        <table class="table table-sm table-bordered" id="table">
            <thead>
      <tr>
        <th>No</th>
        <th>Kelas</th>
        <th>Type Pesawat</th>
        <th>Kota Bandara</th>
        <th>Nama Bandara</th>
        <th>Tanggal Penerbangan</th>
        <th>Asal Penerbangan</th>
        <th>Tujuan Penerbangan</th>
        <th>Jam Berangkat</th>
        <th>Jam Tiba</th>
        <th>Tarif</th>
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
        <td><?php echo $data->kelas ?></td>
        <td><?php echo $data->type_pesawat ?></td>
        <td><?php echo $data->kota_bandara ?></td>
        <td><?php echo $data->nama_bandara ?></td>
        <td><?php echo $data->tgl_penerbangan ?></td>
        <td><?php echo $data->asal ?></td>
        <td><?php echo $data->tujuan ?></td>
        <td><?php echo $data->jam_berangkat ?></td>
        <td><?php echo $data->jam_tiba ?></td>
        <td>Rp. <?php echo $data->tarif ?></td>
        <td>
          <button class="btn btn-primary" onclick="ambil_id('<?php echo $data->id_tarif ?>')">Data +</button>
        </td>
       </tr>
       <?php } ?>
    </tbody>
        </table>
      </div>  
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <input type="text" id="id_penerbangan" hidden=""  name="id_penerbangan">
          <input type="text" id="id_tarif" hidden=""  name="id_tarif">
          <input type="text" id="id_pesawat" hidden=""  name="id_pesawat">
          <input type="text" id="id_detail" hidden="" value="<?php echo $id_detail ?>" name="">
          <div class="row">
            <div class="col-xs-3">
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Customer</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
        <label>ID Customer</label>
        <input type="text" class="form-control" readonly="" id="id_customer" placeholder="Klik Cari Customer" data-toggle="modal" data-target="#modal-skin" onclick="modal('<?php echo site_url('booking/modal_customer') ?>')" name="">
      </div>
      <div class="form-group">
        <label>Nama Customer</label>
        <input type="text" class="form-control" id="nama" readonly="" name="">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" id="email" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Kota</label>
        <input type="text" class="form-control" id="kota" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Negara</label>
        <input type="text" class="form-control" id="negara" name="" readonly="">
      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col --> 
            <div class="col-xs-3">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
        <label>Tanggal Penerbangan</label>
        <input type="date" class="form-control" id="tgl_penerbangan" readonly="" name="">
      </div>
      <div class="form-group">
        <label>Nama Bandara</label>
        <input type="text" class="form-control" id="nama_bandara" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Nama Kota</label>
        <input type="text" class="form-control" id="nama_kota" name="" readonly="">
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
        <label>Jam Berangakat</label>
        <input type="time" class="form-control" id="jam_berangkat" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Jam Tiba</label>
        <input type="time" class="form-control" id="jam_tiba" name="" readonly="">
      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-xs-3">
              <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Tarif Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
        <label>Kelas Penerbangan</label>
        <input type="text" class="form-control" id="kelas" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Tarif Penerbangan</label>
        <input type="text" class="form-control" id="tarif" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Type Pesawat</label>
        <input type="text" class="form-control" id="type_pesawat" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Jumlah Kursi Ekonomi</label>
        <input type="text" class="form-control" id="jml_kursi_ekonomi" name="" readonly="">
      </div>
      <div class="form-group">
        <label>Jumlah Kursi Bisnis</label>
        <input type="text" class="form-control" id="jml_kursi_bisnis" name="" readonly="">
      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-xs-3">
              <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Booking Penerbangan</h3>
                    <div class="box-tools pull-right">
                        
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="form-group">
        <label>ID Booking</label>
        <input type="text" class="form-control" id="id_booking" value="<?php echo $id; ?>" name="id_booking">
      </div>
      <div class="form-group">
        <label>Tanggal Booking</label>
        <input type="date" class="form-control" value="<?php echo date('Y-m-d') ?>" id="tgl_booking" name="tgl_booking">
      </div>
      <div class="form-group">
        <label>Jumlah Penumpang</label>
        <input type="number" onkeyup="total_tarif()" class="form-control" id="jml_penumpang" name="jml_penumpang">
      </div>
      <div class="form-group">
        <label>Total Tarif</label>
        <input type="text" readonly class="form-control" id="total_tarif" name="total_tarif">
      </div>
      <div class="form-group">
        <button class="btn btn-primary form-control" onclick="simpan_booking(),page('<?php echo site_url('booking/simpan_booking') ?>')">Booking</button>
      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          <input type="text" id="out_1" name="" hidden="">
<input type="text" id="out_2" name="" hidden="">
<script type="text/javascript">
    function ambil_id(id) {
      $("#id_tarif").val(id);
      cari_penerbangan();
    }
    function cari_penerbangan() {
      $.ajax({
        url:"<?php echo site_url('booking/cari_penerbangan') ?>",
        type:"POST",
        dataType:"json",
        data:{
          id_tarif:$("#id_tarif").val()
        },
        success:function(data) {
          
          $("#id_penerbangan").val(data.id_penerbangan);
          $("#tgl_penerbangan").val(data.tgl_penerbangan);
          $("#asal").val(data.asal);
          $("#tujuan").val(data.tujuan);
          $("#jam_berangkat").val(data.jam_berangkat);
          $("#jam_tiba").val(data.jam_tiba);
          $("#kelas").val(data.kelas);
          $("#type_pesawat").val(data.type_pesawat);
          $("#jml_kursi_ekonomi").val(data.jml_kursi_ekonomi);
          $("#jml_kursi_bisnis").val(data.jml_kursi_bisnis);
          $("#tarif").val(data.tarif);
          $("#nama_kota").val(data.kota_bandara);
          $("#nama_bandara").val(data.nama_bandara);
          $("#id_pesawat").val(data.id_pesawat);
        }
      })
    }
    function total_tarif() {
      a = $("#tarif").val();
      b = $("#jml_penumpang").val();
      c = a*b;
      $("#total_tarif").val(c);
      jml();
    }
    function simpan_booking() {
      if($("#id_booking").val() == ""){
        swal("Gagal","Data ID Booking Kosong","error");
      }else if($("#total_tarif").val() == ""){
        swal("Gagal","Data Total Tarif Kosong","error");
      }else if($("#tgl_booking").val() == ""){
        swal("Gagal","Data Tanggal Booking Kosong","error");
      }else if($("#jml_penumpang").val() == ""){
        swal("Gagal","Data Jumlah Penumpang Kosong","error");
      }else{
      $.ajax({
        url:"<?php echo site_url('booking/simpan_booking') ?>",
        type:"POST",
        data:{
          id_booking:$("#id_booking").val(),
          id_customer:$("#id_customer").val(),
          id_pesawat:$("#id_pesawat").val(),
          tgl_booking:$("#tgl_booking").val(),
          id_tarif:$("#id_tarif").val(),
          jml_penumpang:$("#jml_penumpang").val(),
          total_tarif:$("#total_tarif").val(),
          id_detail:$("#id_detail").val(),
          kelas:$("#kelas").val(),
          jml_kursi_bisnis:$("#out_1").val(),
          jml_kursi_ekonomi:$("#out_2").val()
        },
        success:function(hasil) {
        document.location="<?php echo site_url('passenger/passenger/') ?>"+$("#id_detail").val();
        }
      })
     }
    }
    // function passenger() {
    //   id = $("#id_detail").val();
    //   page('<?php echo site_url('passenger/passenger/') ?>'+id);
    // }
    function jml() {
      x = $("#kelas").val();
      c = $("#jml_kursi_bisnis").val();
      d = $("#jml_kursi_ekonomi").val();
      z = $("#jml_penumpang").val();
      if(x == "EKONOMI"){
        b = parseInt(d)-parseInt(z);
        $("#out_2").val(b);
        $("#out_1").val(c);
      }else if(x == "BISNIS"){
        f = parseInt(c)-parseInt(z);
        $("#out_1").val(f);
        $("#out_2").val(d);
      }
    }
    function kosong() {
      $("#kota_asal").val("");
      $("#kota_tujuan").val("");
    }
</script>