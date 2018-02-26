<!-- <!DOCTYPE html>
<html>
<head> -->
	<!-- <title></title> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('dist/font-awesome-4.7.0/css/font-awesome.css') ?> ">
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('dist/js/jquery-3.2.1.min.js') ?> "></script>
    <script type="text/javascript" src="<?php echo base_url('dist/js/bootstrap.min.js') ?>"></script> -->
<!-- </head>
<body> -->
	<center><h1>Laporan Booking</h1></center>
	<?php if(empty($this->input->post('tgl_awal'))){ ?>
	<?php }else{ ?>
	<center><h1><?php echo $this->input->post('tgl_awal');?><span> S/D <?php echo $this->input->post('tgl_akhir') ?></span></h1></center>
	<?php } ?>
	<?php if (empty($this->input->post('bulan'))){ ?>	
	
	<?php

	 }else{ 
	$bulan = $this->input->post('bulan');
	$tahun =$this->input->post('tahun');
	?>

	<center><h1><?php echo date('F',strtotime('01-'.$bulan.'-'.$tahun)); ?><span> <?php  echo $tahun ?></span> </h1></center>
	<?php } ?>
	<table class="table table-bordered" id="table">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Booking</th>
				<th>Tanggal Booking</th>
				<th>Nama Pesawat</th>
				<th>Asal Penerbangan</th>
				<th>Tujuan Penerbangan</th>
				<th>Tarif Penerbangan</th>
				<th>Jumlah Penumpang</th>
				<th>Total Tarif</th>
				<th>Status Pembayaran</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$jml = 0;
				$no = 0;
				foreach ($tmp as $data) {$no++;
			 ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td><?php echo $data->id_booking ?></td>
				<td><?php echo $data->tgl_booking ?></td>
				<td><?php echo $data->type_pesawat ?></td>
				<td><?php echo $data->asal ?></td>
				<td><?php echo $data->tujuan ?></td>
				<td><?php echo $data->tarif ?></td>
				<td><?php echo $data->jml_penumpang ?> Orang</td>
				<td>IDR <?php echo $data->total_tarif ?></td>
				<td><?php echo $data->status_bayar ?></td>
			</tr>
			<?php $jml = $jml+$data->total_tarif;} ?>
			<tr>
				<td colspan="7"></td>
				<td><strong>Total Tarf</strong></td>
				<td>IDR <?php echo $jml; ?></td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<div class="ttd">
		<p>TTD</p>

		<p><?php echo $this->session->userdata('level') ?></p>
	</div>
<!-- </body>
</html> -->
<style type="text/css">
	table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
h1{
  font-family: sans-serif;
}
.ttd{
	float: right;
	margin-right: 10%;
}
.ttd p{
	margin-bottom: 110%;
}
</style>