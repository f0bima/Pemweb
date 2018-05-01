<?php   
include 'db.php';
include 'ceklogin.php';
$nim = @$_POST['nim'];
$nama = @$_POST['nama'];
$alamat = @$_POST['alm'];
$tgl = @$_POST['tgl'];
$jk = @$_POST['jk'];

$sql = "INSERT INTO mhs (nim, namamhs, tgl, alamat, jk) VALUES ('$nim', '$nama', '$tgl', '$alamat', '$jk')";
if (empty($nim) || empty($nama) || empty($alamat) || empty($tgl) || empty($jk)) {
    header("Location: mahasiswa.php?add=1");
}
else{
    if ($conn->query($sql)) {
        header("Location: mahasiswa.php?add=2");
    }                     
    else {
        header("Location: mahasiswa.php?add=3");
    }
}
?>                    