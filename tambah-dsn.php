<?php   
include 'db.php';
include 'ceklogin.php';
$nip = @$_POST['nip'];
$nama = @$_POST['nama'];
$alamat = @$_POST['alm'];
$jk = @$_POST['jk'];

$sql = "INSERT INTO dosen (nip, namadsn, alamat, jk) VALUES ('$nip', '$nama', '$alamat', '$jk')";
if (empty($nip) || empty($nama) || empty($alamat) || empty($jk)) {
    header("Location: dosen.php?add=1");
}
else{
    if ($conn->query($sql)) {
        header("Location: dosen.php?add=2");
    }                     
    else {
        header("Location: dosen.php?add=3");
    }
}
?>                    