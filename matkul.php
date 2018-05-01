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
    <title>PEMWEB-MATA KULIAH</title>
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
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
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
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Table</a></li>
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Mata Kuliah</strong>
                            <button type="button" class="btn btn-warning float-right" data-toggle="modal" data-target="#tambah"><i class="fa fa-map-marker"></i>&nbsp; TAMBAH</button>
                        </div>
                        <?php 
                    if (@($_GET['op']=="up")) { 
                    ?>
                        <div class="alert alert-warning" role="alert">EDIT BERHASIL
                        </div>
                    <?php                          
                    }
                    else if (@($_GET['op']=="del")) { 
                    ?>
                        <div class="alert alert-warning" role="alert">DELETE BERHASIL
                        </div>
                    <?php 
                    }
                    else if (@($_GET['add']=="1")) { 
                    ?>
                        <div class="alert alert-warning" role="alert">FORM TIDAK BOLEH KOSONG
                        </div>
                    <?php 
                    }
                    else if (@($_GET['add']=="2")) { 
                    ?>
                        <div class="alert alert-warning" role="alert">BERHASIL MENAMBAH MATA KULIAH
                        </div>
                    <?php 
                    }
                    else if (@($_GET['add']=="3")) { 
                    ?>
                        <div class="alert alert-warning" role="alert">GAGAL MENAMBAH MATA KULIAH
                        </div>
                    <?php 
                    }
                    ?>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>KODE MK</th>
                        <th>MATA KULIAH</th>
                        <th>SEMESTER</th>                        
                        <th>EDIT</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                            $sql="SELECT * from matkul ORDER BY kodemk";
                            $hasil= mysqli_query($conn, $sql);
                            while($data = mysqli_fetch_array($hasil)){
                                echo "<tr>
                                <td>".$data['kodemk']."</td>
                                <td>".$data['matkul']."</td>
                                <td>".$data['smt']."</td>          
                                <td>                                
                                <a href='edit.php?kodemk=".$data['kodemk']."' class='btn btn-secondary'>EDIT </a>
                                <a href='delete.php?kodemk=".$data['kodemk']."' class='btn btn-danger'>HAPUS</a> 

                                </td>
                                </tr>";
                            }                            
                            $conn->close();               
                        ?>                     
                      
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">TAMBAH MATA KULIAH</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="tambah-mk.php" method="POST">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">KODE MK</div>
                                        <input type="text" name="kodemk" class="form-control">
                                        <div class="input-group-addon">
                                        <i class="fa fa-user"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">MATA KULIAH</div>
                                        <input type="text" name="matkul" class="form-control">
                                        <div class="input-group-addon">
                                        <i class="fa fa-user"></i></div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">SEMESTER</div>
                                    <input type="text" name="smt" class="form-control">
                                    <div class="input-group-addon">
                                        <i class="fa fa-user"></i></div>
                                </div>
                            </div>                            
                            <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block">    
                            </form>       
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>                                
                            </div>
                        </div>
                    </div>
                </div>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
