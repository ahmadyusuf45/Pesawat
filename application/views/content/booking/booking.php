          <div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Booking</h3>
                    <div class="box-tools pull-right">
                        <a href="<?php echo site_url('booking/page/f_booking') ?>" class="btn btn-primary btn-sm">Input Data +</a>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <?php 
                    if($this->session->flashdata('success')){
                   ?>
                   <div class="alert alert-success" role="alert" style="opacity: 0.5">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo $this->session->flashdata('success') ?>
                  </div>
                  <?php } ?>
                  <div class="table-responsive">
  <table class="table table-bordered" id="table">
    <thead>
      <tr>
        <th>No</th>
        <th>ID Booking</th>
        <th>Tanggal Booking</th>
        <th>Jumlah Penumpang</th>
        <th>Total Tarif</th>
        <th>Status Pembayaran</th>
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
        <td><?php echo $data->id_booking ?></td>
        <td><?php echo $data->tgl_booking ?></td>
        <td><?php echo $data->jml_penumpang ?> Orang</td>
        <td>IDR <?php echo $data->total_tarif ?></td>
        <td><?php echo $data->status_bayar ?></td>
        <td>
<!--           <button class="btn btn-danger" onclick="hapus_booking('<?php echo $data->id_booking ?>','<?php echo $data->id_detail ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button> -->
<a href="<?php echo site_url('booking/hapus_booking/') ?><?php echo $data->id_booking ?>/<?php echo $data->id_detail ?>" onclick="return confirm('Anda Yakin Menghapus Data Ini ?')" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
<script type="text/javascript">
  function hapus_booking(val1,val2) {
    $.ajax({
      url:"<?php echo site_url('booking/hapus_booking') ?>",
      type:"GET",
      data:{
        id_booking:val1,
        id_detail:val2
      },
      success:function (data) {
        document.location="http://localhost/coba/index.php/booking/page/booking";
      }
    })
  }
</script>