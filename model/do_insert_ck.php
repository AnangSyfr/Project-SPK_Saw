<?php
	include '../db/db_config.php';
	extract($_POST);
	$target_dir = "../assets/foto_calon_karyawan/";
	$file_name = $_FILES['foto']['name'];
	$target_file = $target_dir.basename($_FILES['foto']['name']);
	$file_type = $_FILES['foto']['type'];
	if($file_type=='image/jpeg' || $file_type=='image/gif' || $file_type=='image/jpg'){
		//echo $_FILES['foto']['size'];
		if($_FILES['foto']['size'] < 2000000){
			if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)){
				$db->insert('calon_karyawan',"'','$nama','$file_name','$ttl','$skill','$pengalaman'")->count();
				header('location:../karyawan_show.php');
			} else {
				header('location:../input_karyawan.php?error_msg=error_upload');
			} 
		} else {
			header('location:../input_karyawan.php?error_msg=error_ukuran');
		} 
	} else {
		header('location:../input_karyawan.php?error_msg=error_type');
	}
?>