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
                      <form method="post" action="model/do_insert_tpa.php" enctype="multipart/form-data">
                          <?php if (!empty($_GET['error_msg'])): ?>
                              <div class="alert alert-danger">
                                  <?= $_GET['error_msg']; ?>
                              </div>
                          <?php endif ?>
                          <div class="form-group">
                              <div class="alert alert-info">
                                  <i class="fa fa-info-circle"></i> Nama Yang Ditampilkan adalah nama calon karyawan yang belum memiliki nilai TPA
                              </div>
                              <label for="nama">Nama Calon Karyawan</label>
                                  <select class="form-control" name="id_calon_kr">
                                  <?php  foreach ($db->select('distinct(calon_karyawan.id_calon_kr),calon_karyawan.nama','calon_karyawan,hasil_tpa')->where('calon_karyawan.id_calon_kr not in (select id_calon_kr from hasil_tpa)')->get() as $val): ?> 
                                  <option value="<?= $val['id_calon_kr']?>"><?= $val['nama'] ?></option>
                                  <?php endforeach ?>
                                  </select>
                          </div>
                          <div class="col-md-11 col-md-offset-1 text-center">
                          <?php foreach ($db->select('kriteria','kriteria')->get() as $r): ?>
                          <div class="form-group col-md-2">
                              <label><?= $r['kriteria']?></label>
                              <input type="number" name="<?= $r['kriteria']?>" class="form-control">
                          </div>
                          <?php endforeach ?>
                          </div>
                          <div class="form-group">
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