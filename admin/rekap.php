<?php
include 'koneksi.php';
$month=date("m/Y");
 $sql = mysqli_query($koneksi,"select tanggal,nama,alamat,tk,sd,smp,sma,mhs,umum,total,keterangan from visitor where month='$month'") or die(mysql_error());
	function xlsBOF() {
	echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
}
function xlsEOF() {
	echo pack("ss", 0x0A, 0x00);
}
function xlsWriteNumber($Row, $Col, $Value) {
	echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
	echo pack("d", $Value);
}
function xlsWriteLabel($Row, $Col, $Value) {
	$L = strlen($Value);
	echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
	echo $Value;
} 
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment; filename=\"rekap ".date("M Y").".xls\"");
header("Content-Transfer-Encoding: binary");
header("Pragma: no-cache");
header("Expires: 0");
xlsBOF();
//baris 1
$i=1;
xlsWriteLabel(0, 0, "Tanggal");
xlsWriteLabel(0, 1, "Nama");
xlsWriteLabel(0, 2, "Asal");
xlsWriteLabel(0, 3, "TK");
xlsWriteLabel(0, 4, "SD");
xlsWriteLabel(0, 5, "SMP");
xlsWriteLabel(0, 6, "SMA");
xlsWriteLabel(0, 7, "Mahasiswa");
xlsWriteLabel(0, 8, "Umum");
xlsWriteLabel(0, 9, "Total");
xlsWriteLabel(0, 10, "Keterangan");
while ($query = mysqli_fetch_array($sql))  {
	xlsWriteLabel($i, 0, $query['tanggal']);
	xlsWriteLabel($i, 1, $query['nama']);
	xlsWriteLabel($i, 2, $query['alamat']);
	xlsWriteLabel($i, 3, $query['tk']);
	xlsWriteLabel($i, 4, $query['sd']);
	xlsWriteLabel($i, 5, $query['smp']);
	xlsWriteLabel($i, 6, $query['sma']);
	xlsWriteLabel($i, 7, $query['mhs']);
	xlsWriteLabel($i, 8, $query['umum']);
	xlsWriteLabel($i, 9, $query['total']);
	xlsWriteLabel($i, 10, $query['keterangan']);
	$i=$i+1;
//	//baris 2 dan seterusnya
}
xlsEOF();

?>