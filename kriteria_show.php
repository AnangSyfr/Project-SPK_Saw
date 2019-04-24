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
                    <h4 class="page-head-line">Master Data Kriteria</h4>
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
                <div><a href="input_kriteria.php" class="btn btn-info">Tambah Data</a></div>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kriteria</th>
                                <th>Bobot</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($db->select('*','kriteria')->get() as $data): ?>
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $data['kriteria']?></td>
                                <td><?= $data['bobot']?></td>
                                <td>
                                    <a class="btn btn-warning" href="edit_kriteria.php?id=<?php echo $data[0]?>">Edit</a>
                                    <a class="btn btn-danger" href="model/do_delete_kriteria.php?id=<?php echo $data[0]?>">Hapus</a>
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
        $("#ds").addClass('menu-top-active');
    });
</script>