<?php
	include '../db/db_config.php';
	$id = $_GET['id'];
	if($db->delete('hasil_tpa')->where('id_calon_kr='.$id)->count() == 1){
		header('location:../tpa_show.php');
	} else {
		header('location:../tpa_show.php?error_msg=error_delete');
	}
?>