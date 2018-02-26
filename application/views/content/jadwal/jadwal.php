         <div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Jadwal Penerbangan</h3>
                    <div class="box-tools pull-right">
                      
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
  <table class="table table-bordered" id="table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Penerbangan</th>
        <th>Kelas Penerbangan</th>
        <th>Tanggal Penerbangan</th>
        <th>Asal Penerbangan</th>
        <th>Tujuan Penerbangan</th>
        <th>Jam Berangakat</th>
        <th>Jam Tiba</th>
        <th>Nama Pesawat</th>
        <th>Tempat Bandara</th>
        <th>Nama Bandara</th>
        <th>Jumlah Kursi Ekonomi</th>
        <th>Jumlah Kursi Bisnis</th>
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
        <td><?php echo $data->kelas ?></td>
        <td><?php echo $data->tgl_penerbangan ?></td>
        <td><?php echo $data->asal ?></td>
        <td><?php echo $data->tujuan ?></td>
        <td><?php echo $data->jam_berangkat ?></td>
        <td><?php echo $data->jam_tiba ?></td>
        <td><?php echo $data->type_pesawat ?></td>
        <td><?php echo $data->kota_bandara ?></td>
        <td><?php echo $data->nama_bandara ?></td>
        <td><?php echo $data->jml_kursi_ekonomi ?> Kursi</td>
        <td><?php echo $data->jml_kursi_bisnis ?> Kursi</td>
       </tr>
       <?php } ?>
    </tbody>
  </table>
      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->