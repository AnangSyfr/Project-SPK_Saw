<?php
	include '../db/db_config.php';
	extract($_POST);
	if($db->insert('hasil_tpa',"'','$id_calon_kr','$k_verbal','$k_logika','$k_numerik','$k_visual','$k_pem_wcn'")->count() == 1){
		header('location:../tpa_show.php');
	}
?>