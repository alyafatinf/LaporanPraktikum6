<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
include "DataWaktu.php";

if (empty($nama) || empty($email)) {
    header('Location: TidakLengkap.php');
} else {
    echo "Nama : $nama"."<br>";
    echo "Email : $email"."<br>";
    echo "Terakhir Login : $tanggal $waktu";
}
?>