<?php   
include 'db.php';
include 'ceklogin.php';
$kodemk = @$_POST['kodemk'];
$matkul = @$_POST['matkul'];
$smt = @$_POST['smt'];

$sql = "INSERT INTO matkul (kodemk, matkul, smt) VALUES ('$kodemk', '$matkul', '$smt')";
if (empty($kodemk) || empty($matkul) || empty($smt)) {
    header("Location: matkul.php?add=1");
}
else{
    if ($conn->query($sql)) {
        header("Location: matkul.php?add=2");
    }                     
    else {
        header("Location: matkul.php?add=3");
    }
}
?>                    