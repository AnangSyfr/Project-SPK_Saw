<?php
	include '../db/db_config.php';
	foreach ($db->select('*','users')->where('id_user='.$_POST['id'])->get() as $data):
?>
	<input type="hidden" name="id_user" value="<?= $data['id_user']?>">
	<div class="form-group">
		<label>Fullname</label>
		<input type="text" name="fullname" class="form-control" value="<?= $data['fullname']?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control" value="<?= $data['email']?>">
	</div>
	<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" class="form-control" value="<?= $data['address']?>">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" value="<?= $data['username']?>">
	</div>
<?php endforeach ?>