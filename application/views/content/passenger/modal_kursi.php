<?php 
	$hsl = $item->row_array();
	$kelas = $hsl['kelas'];
	$id =$hsl['id_pesawat'];
	$limit_eko = $hsl['jml_kursi_ekonomi'];
	$limit_bis = $hsl['jml_kursi_bisnis'];
 ?>
<div class="modal-dialog modal-lg" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title"></h4>
		</div>
		<div class="modal-body">
			<?php 
				if($kelas == 'EKONOMI'){
					$no = "EKO00";
					$select="";
					for ($i=0; $i < $limit_eko; ) {
					$i++;
					$no++;
			 ?>
			 <button class="btn-primary btn-sm" data-dismiss="modal" id="no_eko_<?php echo $no; ?>" onclick="ambil_kursi_eko('<?=$no?>','<?php echo $to; ?>','no_eko_<?php echo $no; ?>')">Kuris <?php echo $no ?></button>
			 <?php 
				}
					}else{
						$no = "BIS00";
						for ($i=0; $i < $limit_bis; ) { 
							$i++;
							$no++;
			  ?>
			  <button class="btn-primary btn-sm" data-dismiss="modal" data-no-bis="<?php echo $no; ?>" onclick="ambil_kursi_bis('<?php echo $no ?>')">Kursi <?php echo $no ?></button>
			  <?php 
			  	}
			  		}
			   ?>
		</div>
	</div>
</div>
<script type="text/javascript">
	function ambil_kursi_eko(m,co,w) {
		x = m;
		z = "#"+co;
		i = "#"+w;
		$(z).val(x);
	}
	function ambil_kursi_bis(no) {
		$("#nomor_kursi").val(no);
	}
</script>