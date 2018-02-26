<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta http-equiv="refresh" content="2">
 	 <script src="<?php echo base_url();?>/assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
 	<link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/font-awesome-4.7.0/css/font-awesome.css') ?> ">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/skins/_all-skins.min.css">
    <script type="text/javascript" src="<?php echo base_url('dist/js/jquery-3.2.1.min.js') ?> "></script>
    <script type="text/javascript" src="<?php echo base_url('dist/js/bootstrap.min.js') ?>"></script>
     <script src="<?php echo base_url();?>/assets/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url();?>/assets/dist/js/app.min.js"></script>
    <script src="<?php echo base_url();?>/assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url();?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
</head>
<body>
	<?php 
		foreach ($tmp as $data) {
	 ?>
	 <div class="">
	<div class="box">
		<div class="box-body">
			<div class="col-lg-12" style="background-color: #fff">
		<div class="col-sm-7" style="border-right: 1px solid#000">
			<div class="col-sm-12">
				<label><?php echo $data->kelas ?> CLASS : BOARDING PASS</label>
			</div>
			<div class="col-sm-12">
				<div class="form-group">
					<label>Nama Passenger</label>
					<p><?php echo $data->nama_passenger ?></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Flight</label>
					<p><?php echo $data->id_penerbangan ?></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Gate</label>
					<p>TIMUR</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Boarding Time</label>
					<p><?php echo $data->tgl_penerbangan ?></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>From</label>
					<p><?php echo $data->asal ?></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>To</label>
					<p><?php echo $data->tujuan ?></p>
				</div>
			</div>
			<div class="col-sm-12">
				<p>SPECIAL REQUEST</p>
				<p>GATE CLOSES 15 BEFORE ST</p><br>
				<p>PLEASE BE AT THE BOARDING GATE AT LEST 30 MINUTES BEFORE TIME.</p>
			</div>
		</div>
		<div class="col-sm-5" style="">
			<div class="col-sm-6">
				<br><br><br>
				<h3 style="font-family: 'Courier New'; "><?php echo $data->nama_passenger ?></h3>
			</div>
			<div class="col-sm-6">
				<img src="<?php echo base_url() ?>assets/login/images/MINI1.png" class="" style="width: 70%">
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Flight</label>
					<p><?php echo $data->id_penerbangan ?></p>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Boarding Time</label>
					<p><?php echo $data->tgl_penerbangan ?></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Gate</label>
					<p>TIMUR</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>From</label>
					<p><?php echo $data->asal ?></p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>To</label>
					<p><?php echo $data->tujuan ?></p>
				</div>
			</div>
			<div class="col-sm-12">
				<label><center> <?php echo $data->kelas ?> CLASS</center></label>
			</div>
		</div>
	</div>
		</div>
	</div>
</div>
	<?php } ?>
</body>
</html>
<style type="text/css">
	*{
		font-family: 'Courier New';
	}
</style>
<script type="text/javascript">
	// $(document).ready(function () {
	// 	setInterval(window.print(),3000);
	// })
</script>