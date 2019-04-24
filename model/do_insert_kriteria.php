<?php
	include '../db/db_config.php';
	extract($_POST);
	$crt_tmp = explode(' ',$kriteria);
	$crt = implode('_', $crt_tmp);
	if($db->insert('kriteria',"'','$crt','$bobot','$type'")->count() == 1){
		$db->alter('hasil_tpa','add column',"$crt",'int')->get();
		header('location:../kriteria_show.php');
	}
?>