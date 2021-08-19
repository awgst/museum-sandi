<?php
include'koneksi.php';//menjalankan
$month=date("m/Y");
$tgl=date("d/m/Y");
$nama=$_POST['nama'];
$negara=$_POST['negara'];
$alamat=$_POST['alamat'];
$tk=$_POST['tk'];
$sd=$_POST['sd'];
$smp=$_POST['smp'];
$sma=$_POST['sma'];
$mhs=$_POST['mhs'];
$umum=$_POST['umum'];
$total=$_POST['total'];
$keterangan=$_POST['keterangan'];
$query = mysqli_query($koneksi,"INSERT INTO `visitor` (`id`, `tanggal`, `nama`, `negara`, `alamat`, `tk`, `sd`, `smp`, `sma`, `mhs`, `umum`, `total`, `keterangan`, `month`) VALUES (NULL, '$tgl', '$nama', '$negara', '$alamat', '$tk', '$sd', '$smp', '$sma', '$mhs', '$umum', '$total', '$keterangan', '$month');") or die(mysql_error());

if($query!="") {
	header("location: kunjungan.php");
}
else
{
	echo "gagal";
}
?>