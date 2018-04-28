<?php 
	include 'db.php';
	include 'ceklogin.php';
	$nim = @$_POST['nim'];
	$nama = @$_POST['nama'];
	$alamat = @$_POST['alm'];
	$tgl = @$_POST['tgl'];
	$jk = @$_POST['jk'];
	echo "$nim";
	$sql="UPDATE mhs SET namamhs ='$nama' ,tgl='$tgl' ,alamat='$alamat' ,jk='$jk' WHERE nim= '$nim'";   	
   	if ($conn->query($sql)) {    
    	header("Location: mahasiswa.php?op=up");
	} else {    
    	header("edit.php?nim=".$nim."&nofif=up");
	} 
	// tutup koneksi
	$conn->close();	
?>