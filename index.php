<?php
    session_start();
    error_reporting(0);
    if(empty($_SESSION['id'])){
        header('location:login.php');
    }
?>
<?php include 'partials/header.php';?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        Selamat Datang !
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Do Something Here -->
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->

<?php include 'partials/footer.php'; ?>
<script type="text/javascript">
    $(function(){
        $("#home").addClass('menu-top-active');
    });
</script>