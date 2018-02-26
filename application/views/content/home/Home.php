      <div class="row">
        <div class="col-lg-12">
          <?php 
                    if($this->session->flashdata('success')){
                   ?>
                   <div class="alert alert-success" role="alert" style="opacity: 0.5">
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <?php echo $this->session->flashdata('success') ?>
                  </div>
                   <?php } ?>
        </div>
      </div>
         <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-area-chart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pemesanan</span>
              <span class="info-box-number"><?php echo $booking ?> <small>Data</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Penerbangan</span>
              <span class="info-box-number"><?php echo $penerbangan ?> <small>Data</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-paper-plane"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pesawat</span>
              <span class="info-box-number"><?php echo $pesawat ?> <small>Data</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bandara</span>
              <span class="info-box-number"><?php echo $bandara ?> <small>Data</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

