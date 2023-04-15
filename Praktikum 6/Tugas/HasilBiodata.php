<?php
//mengambil data dari parameter form biodata
$nama = $_GET['nama'];
$tempatlahir = $_GET['tempatlahir'];
$tgllahir = $_GET['tgllahir'];
$kelamin = $_GET['kelamin'];
$alamat = $_GET['alamat'];
$agama = $_GET['agama'];
$pekerjaan = $_GET['pekerjaan'];

//menampilkan data
echo "<h2>Form Biodata</h2>";
echo "Nama = $nama"."<br>";
echo "Tempat & Tanggal Lahir = $tempatlahir, $tgllahir"."<br>";
echo "Jenis Kelamin = $kelamin"."<br>";
echo "Alamat = $alamat"."<br>";
echo "Agama = $agama"."<br>";
echo "Pekerjaan = $pekerjaan"."<br>";
?>