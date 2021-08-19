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
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><strong>Museum Sandi</strong></a>
				
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
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Statistik</a>
                    </li>
                    <li>
                        <a href="table.php"><i class="fa fa-table"></i>Daftar Pengunjung</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Data Statistik
                        </h1>
                         <?php
                                          include'koneksi.php';
                                          $datenya=date("d/m/Y");
                                          $month=date("m/Y");
										  $tampilpelajar=0;
										  $tampilumum=0;
										  $tampilmhs=0;
										  $tampilturis=0;
                                          $pelajar=0;
                                          $umum=0;
                                          $mhs=0;
                                          $total=0;
                                          $turis=0;
                                          $hariini=0;
                                          $bulanini=0;
                                          $turis=0;
                                          $sql = mysqli_query($koneksi,"select * from visitor") or die(mysql_error());
                                          $sql2 = mysqli_query($koneksi,"SELECT * FROM `visitor` WHERE negara <> 'Indonesia'");
                                          $sql3 = mysqli_query($koneksi,"SELECT * FROM `visitor` WHERE tanggal = '$datenya'");
                                          $sql4 = mysqli_query($koneksi,"SELECT * FROM `visitor` WHERE month = '$month'");
                                          while ($query = mysqli_fetch_array($sql))  {
                                            $pelajar+=(int)$query['tk']+(int)$query['sd']+(int)$query['smp']+(int)$query['sma'];
                                            $umum+=(int)$query['umum'];
                                            $mhs+=(int)$query['mhs'];
                                            $total+=(int)$query['total'];
                                          }
                                          while($query = mysqli_fetch_array($sql2)){
                                            $turis+=(int)$query['total'];
                                          }
                                          while($query = mysqli_fetch_array($sql3)){
                                            $hariini+=(int)$query['total'];
                                          }
                                          while($query = mysqli_fetch_array($sql4)){
                                            $bulanini+=(int)$query['total'];
                                          }
										  if($total>0){
											  $tampilpelajar=($pelajar/$total)*100;
											  $tampilumum=($umum/$total)*100;
											  $tampilmhs=($mhs/$total)*100;
											  $tampilturis=($turis/$total)*100;
										  }
                                          
                                          $pelajarnya=number_format($tampilpelajar,1);
                                          $umumnya=number_format($tampilumum,1);
                                          $mhsnya=number_format($tampilmhs,1);
                                          $turisnya=number_format($tampilturis,1);

                        ?>
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	           <script type="text/javascript">
                function timedRefresh(timeoutPeriod) {
                        setTimeout("location.reload(true);",timeoutPeriod);
                }
                window.onload = timedRefresh(5000);
               </script>
                <div class="row" id="show">
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board"  >
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3  id="show"><?=$hariini?></h3>
								<small>Hari Ini</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-eye fa-5x red"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3><?=$bulanini?></h3>
                                <small>Bulan Ini</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-eye fa-5x red"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3><?=$total?></h3>
                                <small>Total</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-eye fa-5x red"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3><?=$turis?></h3>
                                <small>Turis</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-eye fa-5x red"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
					
					
				   
                </div>
				     
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Pelajar</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="<?=$pelajarnya?>" ><span class="percent"><?=$pelajarnya?>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Mahasiswa</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="<?=$mhsnya?>" ><span class="percent"><?=$mhsnya?>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Umum</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="<?=$umumnya?>" ><span class="percent"><?=$umumnya?>%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Turis</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="<?=$turisnya?>" ><span class="percent"><?=$turisnya?>%</span>
						</div>
					</div>
				</div>
			</div>
		</div>
				<footer>
                    <p>Copyright &copy; All Rights Reserved by WebThemez</p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>