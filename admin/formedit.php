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
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a href=""><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                             <center>
                                Edit Data
                             </center>

                        </div>
                        <?php
                          include 'koneksi.php';
                          $id=$_GET['id'];
                          $sql = mysqli_query($koneksi,"select * from visitor where id='$id'") or die(mysql_error());
                          $query = mysqli_fetch_array($sql);
                        ?>
                        <div class="panel-body">
                             <form action="proses_edit.php" method="POST">
                                <input type="hidden" name="id" value="<?=$query['id']?>">
                                <input type="hidden" name="month" value="<?=$query['month']?>">
                                <input type="hidden" name="tanggal" value="<?=$query['tanggal']?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control" disabled="disabled" value="<?=$query['tanggal']?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama/Name" required="required" name="nama" value="<?=$query['nama']?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Alamat/Address" required="required" name="alamat" value="<?=$query['alamat']?>">
                                        </div>
                                        <div class="form-group">
                                             <table>
                                                  <tr>
                                                    <td><p>TK</p></td>
                                                    <td><p>SD</p></td>
                                                    <td><p>SMP</p></td>
                                                    <td><p>SMA</p></td>
                                                    <td><p>Mahasiswa</p></td>
                                                    <td><p>Umum</p></td>
                                                  </tr>
                                                  <tr>
                                                    <td><input type="number" class="form-control" placeholder="TK" value="<?=$query['tk']?>" name="tk"></td>
                                                    <td><input type="number" class="form-control" placeholder="SD" value="<?=$query['sd']?>" name="sd"></td>
                                                    <td><input type="number" class="form-control" placeholder="SMP" value="<?=$query['smp']?>"  name="smp"></td>
                                                    <td><input type="number" class="form-control" placeholder="SMA" value="<?=$query['sma']?>"  name="sma"></td>
                                                    <td><input type="number" class="form-control" placeholder="Mahasiswa" value="<?=$query['mhs']?>"  name="mhs"></td>
                                                    <td><input type="number" class="form-control" placeholder="Umum" value="<?=$query['umum']?>"  name="umum"></td>
                                                  </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Total" required="required" value="<?=$query['total']?>"  name="total">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" cols="30" rows="10" placeholder="Keterangan"  name="keterangan"><?=$query['keterangan']?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>
                            
                        </div>
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




<!--

                
                
                     
               
                  
                
                <input type="submit" value="Submit" class="btn btn-default">
                -->