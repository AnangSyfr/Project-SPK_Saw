<?php
    session_start();
    error_reporting(0);
    if(empty($_SESSION['id'])){
        header('location:login.php?error_login=1');
    }
?>
<?php include 'partials/header.php';?>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <br/>  
              <div class="panel panel-default">
                  <div class="panel-heading">
                    Form Kriteria
                  </div>
                  <div class="panel-body">
                      <form method="post" action="model/do_update_tpa.php">
                          <?php if (!empty($_GET['error_msg'])): ?>
                              <div class="alert alert-danger">
                                  <?= $_GET['error_msg']; ?>
                              </div>
                          <?php endif ?>
                          <?php foreach ($db->select('hasil_tpa.*,calon_karyawan.id_calon_kr,calon_karyawan.nama','hasil_tpa,calon_karyawan')->where('hasil_tpa.id_calon_kr=calon_karyawan.id_calon_kr and hasil_tpa.id_calon_kr='.$_GET['id'])->get() as $data): ?>
                          	  <input type="hidden" name="id" value="<?= $data['id_calon_kr']?>">
                              <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']?>" readonly>
                              </div>
                              <?php foreach ($db->select('kriteria','kriteria')->get() as $r): ?>
	                          <div class="form-group col-md-2">
	                              <label><?= $r['kriteria']?></label>
	                              <input type="number" name="kriteria[]" class="form-control" value="<?= $data[$r['kriteria']]?>">
	                          </div>
	                          <?php endforeach ?>
                          <?php endforeach ?>
                          
                          <div class="form-group col-md-12">
                              <button class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
        </div>
        </div>
    </div>
</div>
<?php include 'partials/footer.php';?>
<script type="text/javascript">
</script>