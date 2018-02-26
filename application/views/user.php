<!DOCTYPE html>
<html>
<head>
    <title></title>
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
<!--     <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/AdminLTE.min.css">
 -->    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
   <!--  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/skins/_all-skins.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/index.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/box.css">
</head>
<body>
<div class="kepala-atas">
    <div class="logo">
        <img src="<?php echo base_url() ?>/img/MINI1.png">
    </div>
    <div class="item_menu">
        
    </div>  
</div>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-toggle" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="nav-toggle">
        <ul class="nav navbar-nav">
            <li><a href="?page=t_beranda"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href=""><span class="glyphicon glyphicon-briefcase"></span> Jadwal Penerbangan</a></li>
          
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="?page=t_pembayaran"><span class="glyphicon glyphicon-user"></span> Customer Care</a></li>
            <li><a href="?page=t_info_pembayaran"><span class="glyphicon glyphicon-info-sign"></span> Info Customer</a></li>
        </ul>
        </div>
    </div>
</nav>

<div class="content">
      <?php
                    include 'content/'.$folder.$page.'.php';
                ?>
</div>

<div class="item-footer">
    
</div>
</body>
</html>
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
          $("#table").dataTable();
          $(".item-footer").load('item/footer_index.php');
      })
  </script>