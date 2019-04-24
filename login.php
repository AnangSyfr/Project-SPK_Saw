<?php include 'partials/header.php';?>

<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <br />
                    <?php if ($_GET['error_login']==1): ?>
                         <div class="alert alert-danger">
                            Anda Harus Login Terlebih Dahulu !
                        </div>
                    <?php endif ?>
                    <form method="post" action="model/do_login.php">
                    	<label>Enter Username : </label>
                        <input type="text" name="username" class="form-control" />
                        <label>Enter Password :  </label>
                        <input type="password" name="password" class="form-control" />
                        <hr />
                        <button type="submit" class="btn btn-info"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </button>&nbsp;
                   	</form>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                        This is a free bootstrap admin template with basic pages you need to craft your project. 
                        Use this template for free to use for personal and commercial use.
                        <br />
                         <strong> Some of its features are given below :</strong>
                        <ul>
                            <li>
                                Responsive Design Framework Used
                            </li>
                            <li>
                                Easy to use and customize
                            </li>
                            <li>
                                Font awesome icons included
                            </li>
                            <li>
                                Clean and light code used.
                            </li>
                        </ul>
                       
                    </div>
                    <div class="alert alert-success">
                        <strong> Cari Calon Karyawan</strong>
                        <form method="get" action="model/cari_karyawan.php">
                            <div class="input-group">
                                <input type="text" class="form-control" name="nama" placeholder="Search">
                                <div class="input-group-btn">
                                  <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                  </button>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php include 'partials/footer.php';?>