<?php
	include '../db/db_config.php';
	extract($_POST);
	$pass = md5($password);
	$sql = $db->select('*','hrd')->where("username='$username' and password='$pass'");
	$check = $sql->count();
	if($check==1){
		foreach ($sql->get() as $data) {
			$id_user = $data['nip'];
			//$level = $data['id_role'];
		}
		session_start();
		$_SESSION['id'] = $id_user;
		$_SESSION['name'] = $username;
		//$_SESSION['level'] = $level;
		header('location:../index.php');
	} else {
		header('location:../login.php');
	}
?>