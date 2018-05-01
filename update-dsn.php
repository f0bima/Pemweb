<?php 
	include 'db.php';
	include 'ceklogin.php';
	$nip = @$_POST['nip'];
	$nama = @$_POST['namadsn'];
	$alamat = @$_POST['alm'];	
	$jk = @$_POST['jk'];
	echo "$nim";
	$sql="UPDATE dosen SET namadsn ='$nama' ,alamat='$alamat' ,jk='$jk' WHERE nip= '$nip'";   	
   	if ($conn->query($sql)) {    
    	header("Location: dosen.php?op=up");
	} else {    
    	header("edit.php?nip=".$nip."&nofif=up");
	} 
	// tutup koneksi
	$conn->close();	
?>