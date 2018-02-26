<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>-------</title>
    <!-- Icon -->
    <link rel="shortcut icon" type="image/icon" href="../favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/sweetalert2-master/dist/sweetalert2.min.css') ?>">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fa/css/font-awesome.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/skins/_all-skins.min.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include "content_header.php";  
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">
            <!--   <li class="header">Main Menu</li> -->
              <li class="active"><a href="<?php echo site_url('home/page');?>" ><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
            <?php if($this->session->userdata('level') == "admin"){ ?>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Data</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('bandara/page/bandara') ?>"><i class="fa fa-circle-o"></i>Bandara </a></li>
                    <li><a href="<?php echo site_url('pesawat/page/pesawat') ?>"><i class="fa fa-circle-o"></i>Pesawat</a></li>
                    <li><a href="<?php echo site_url('customer/page/customer') ?>"><i class="fa fa-circle-o"></i>Customer</a></li>
                    <li><a href="<?php echo site_url('penerbangan/page/penerbangan') ?>"><i class="fa fa-circle-o"></i>Penerbangan</a></li>
                    <li><a href="<?php echo site_url('tarif/page/tarif') ?>"><i class="fa fa-circle-o"></i>Tarif</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url('backup/page') ?>"><i class="fa fa-database" aria-hidden="true"></i><span>Backup Database</span></a></li>
        <?php }elseif($this->session->userdata('level') == "petugas"){ ?>
            <li><a href="<?php echo site_url('jadwal/page/jadwal') ?>"><i class="fa fa-calendar" aria-hidden="true"></i><span>Jadwal Penerbangan</span></a></li>
            <li><a href="<?php echo site_url('booking/page/booking') ?>"><i class="fa fa-briefcase" aria-hidden="true"></i><span>Booking</span></a></li>
        <?php }else if($this->session->userdata('level') == "manajer"){ ?>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-clipboard"></i>
                    <span>Laporan</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('laporan/page/laporan_pemesanan') ?>"><i class="fa fa-circle-o"></i>Laporan Pemesanan </a></li>
                </ul>
            </li>
        <?php }else{ ?>
        <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Data</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('bandara/page/bandara') ?>"><i class="fa fa-circle-o"></i>Bandara </a></li>
                    <li><a href="<?php echo site_url('pesawat/page/pesawat') ?>"><i class="fa fa-circle-o"></i>Pesawat</a></li>
                    <li><a href="<?php echo site_url('customer/page/customer') ?>"><i class="fa fa-circle-o"></i>Customer</a></li>
                    <li><a href="<?php echo site_url('penerbangan/page/penerbangan') ?>"><i class="fa fa-circle-o"></i>Penerbangan</a></li>
                    <li><a href="<?php echo site_url('tarif/page/tarif') ?>"><i class="fa fa-circle-o"></i>Tarif</a></li>
                </ul>
            </li>
            <li><a href="<?php echo site_url('backup/page') ?>"><i class="fa fa-database" aria-hidden="true"></i><span>Backup Database</span></a></li>
        <li><a href="<?php echo site_url('jadwal/page/jadwal') ?>"><i class="fa fa-calendar" aria-hidden="true"></i><span>Jadwal Penerbangan</span></a></li>
            <li><a href="<?php echo site_url('booking/page/booking') ?>"><i class="fa fa-briefcase" aria-hidden="true"></i><span>Booking</span></a></li>
        <li class="treeview">
                <a href="#">
                    <i class="fa fa-clipboard"></i>
                    <span>Laporan</span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('laporan/page/laporan_pemesanan') ?>"><i class="fa fa-circle-o"></i>Laporan Pemesanan </a></li>
                </ul>
            </li>
            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!-- Main content -->
        <section class="content" id="content">
               <?php
                    include 'content/'.$folder.$page.'.php';
                ?>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php
        include "content_footer.php";
    ?>
    <div id="modal-skin" class="modal fade" role="dialog">
    </div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
        <script type="text/javascript" src="<?php echo base_url('assets/sweetalert2-master/dist/sweetalert2.min.js') ?>"></script>
    <script src="<?php echo base_url();?>/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url();?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?php echo base_url();?>/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>/assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $("#table").DataTable();
    })
    function modal(url) {
        $.ajax({
            url:url,
            success:function (data) {
                $("#modal-skin").html(data);
            }
        })
    }
    function page(url) {
        $.ajax({
            url:url,
            success:function (data) {
                $("#content").html(data);
            }
        })
    }
    </script>
        
  </body>
</html>
