<?php
	include 'koneksi.php';
	$id=$_POST['id'];
	$tgl=$_POST['tanggal'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$tk=$_POST['tk'];
	$sd=$_POST['sd'];
	$smp=$_POST['smp'];
	$sma=$_POST['sma'];
	$mhs=$_POST['mhs'];
	$umum=$_POST['umum'];
	$total=$_POST['total'];
	$keterangan=$_POST['keterangan'];
	$month=$_POST['month'];
	$query = mysqli_query($koneksi,"UPDATE `visitor` SET `nama` = '$nama', `alamat` = '$alamat', `tk` = '$tk', `sd` = '$sd', `smp` = '$smp', `sma` = '$sma', `mhs` = '$mhs', `umum` = '$umum', `total` = '$total', `keterangan` = '$keterangan' WHERE `visitor`.`id` = '$id';") or die(mysqli_error($koneksi));
	header("location: table.php");
?>
