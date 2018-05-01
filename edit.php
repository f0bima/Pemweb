<?php 
include 'db.php';
include 'ceklogin.php';
?>    
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php                         
        if (isset($_GET['nim'])) {
            echo "<title>PEMWEB-EDIT MAHASISWA</title>";
        }
        elseif (isset($_GET['nip'])) {
            echo "<title>PEMWEB-EDIT DOSEN</title>";
        }
        elseif (isset($_GET['kodemk'])) {
            echo "<title>PEMWEB-EDIT MATKUL</title>";
        }
    ?>                            
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->
    <?php 
    include 'menu.php';
    ?>    
    <!-- Left Panel -->
    
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->        
        <?php 
        include 'header.php';
        ?>    
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <?php                         
                        if (isset($_GET['nim'])) {
                            echo "<h1>EDIT MAHASISWA</h1>";
                        }
                        elseif (isset($_GET['nip'])) {
                            echo "<h1>EDIT DOSEN</h1>";
                        }
                        elseif (isset($_GET['kodemk'])) {
                            echo "<h1>EDIT MATA KULIAH</h1>";
                        }
                        ?>                        
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">               
                  <div class="col-lg-6">
                    <div class="card">
                    <div class="card-header">EDIT Form</div>

                    <?php 
                    if (@($_GET['notif']=="up")) { 
                    ?>
                        <div class="alert alert-warning" role="alert">EDIT GAGAL
                        </div>
                    <?php                          
                    }
                    else if (@($_GET['notif']=="del")) { 
                    ?>
                        <div class="alert alert-warning" role="alert">DELETE GAGAL
                        </div>
                    <?php 
                    }
                    ?>                    

                    <div class="card-body card-block">
                    <?php 
                    if (isset($_GET['nim'])) {
                        include 'edit-mhs.php';
                    }
                    elseif (isset($_GET['nip'])) {
                        include 'edit-dsn.php';
                    }
                    elseif (isset($_GET['kodemk'])) {
                        include 'edit-mk.php';
                    }
                    
                    ?>
                    </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->           
        </div><!-- .content -->
    </div>
    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
