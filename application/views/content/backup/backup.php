 <div class="row">
            <div class="col-lg-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Backup Database</h3>
                    <div class="box-tools pull-right">
              
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <p class="bg-success" id="alert" style="padding: 10px; display: none;">Berhasil Backup Database</p>
                 <a onclick="alert()" href="<?php echo site_url('backup/backup') ?>" class="btn btn-primary"><center><i class="fa fa-download"></i></center></a>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
<script type="text/javascript">
function alert() {
    $("#alert").css({"display":"block"});
}
</script>