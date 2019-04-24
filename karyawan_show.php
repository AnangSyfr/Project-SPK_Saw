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
                    <br>
                    <h4 class="page-head-line">Master Data Karyawan</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php if (!empty($_GET['error_msg'])): ?>
                      <div class="alert alert-danger">
                          <?= $_GET['error_msg']; ?>
                      </div>
                    <?php endif ?>
                </div>
            </div>  
            <div class="row">
                <div><a href="input_karyawan.php" class="btn btn-info">Tambah Data</a></div>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Ttl</th>
                                <th>Skill</th>
                                <th>Pengalaman</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($db->select('*','calon_karyawan')->get() as $data): ?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $data['nama']?></td>
                                <td><img src="assets/foto_calon_karyawan/<?= $data['foto']?>" width="100px"></td>
                                <td><?= $data['ttl']?></td>
                                <td><?= $data['skill']?></td>
                                <td><?= $data['pengalaman']?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit_karyawan.php?id=<?php echo $data[0]?>">Edit</a>
                                    <a class="btn btn-danger" href="model/do_delete_ck.php?id=<?php echo $data[0]?>">Hapus</a>
                                </td>
                            </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                    </table>    
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->

<?php include 'partials/footer.php'; ?>
<script type="text/javascript">
    $(function(){
        $("#ck").addClass('menu-top-active');
    });
</script>