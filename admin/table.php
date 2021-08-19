<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php
    session_start();
    if (!isset($_SESSION['login'])) {
      header("location:http://localhost/sandi/index.php");
    }
    ?>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Admin Panel Museum Sandi</title>
    <link rel="shortcut icon" type="image/icon" href="wpf-favicon.png"/>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong> Museum Sandi</strong></a>
				<div id="sideNav" href="">
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
               
              
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard"></i> Statistik</a>
                    </li>
                    <li>
                        <a href="table.php" class="active-menu"><i class="fa fa-table"></i> Data Pengunjung</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Data Pengunjung
                        </h1>
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pengunjung
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Asal</th>
                                            <th>Alamat</th>
                                            <th>TK</th>
                                            <th>SD</th>
                                            <th>SMP</th>
                                            <th>SMA</th>
                                            <th>Mahasiswa</th>
                                            <th>Umum</th>
                                            <th>Total</th>
                                            <th>Keterangan</th>
                                            <th style="text-align: center;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          include'koneksi.php';
                                          $sql = mysqli_query($koneksi,"select * from visitor") or die(mysql_error());
                                          while ($query = mysqli_fetch_array($sql))  {
                                          ?>
                                          <tr>
                                            <td> <?php echo $query['tanggal']; ?></td>
                                            <td> <?php echo $query['nama']; ?></td>
                                            <td> <?php echo $query['negara']; ?></td>
                                            <td> <?php echo $query['alamat']; ?></td>
                                            <td> <?php echo $query['tk']; ?></td>
                                            <td> <?php echo $query['sd']; ?></td>
                                            <td> <?php echo $query['smp']; ?></td>
                                            <td> <?php echo $query['sma']; ?></td>
                                            <td> <?php echo $query['mhs']; ?></td>
                                            <td> <?php echo $query['umum']; ?></td>
                                            <td> <?php echo $query['total']; ?></td>
                                            <td> <?php echo $query['keterangan']; ?></td>
                                            <td style="text-align: center;"> <a href="formedit.php?id=<?=$query['id']?>" class="btn btn-primary">Edit</a> | <a href="delete.php?id=<?=$query['id']?>" class="btn btn-primary">Delete</a></td>
                                          </tr>
                                          <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <center>
                        <a href="rekap.php" class="btn btn-primary">Rekap</a>
                        </center>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                
                <!-- /. ROW  -->
        </div>
               <footer><p>Copyright &copy; All Rights Reserved by WebThemez</p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
