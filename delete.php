<?php
	include 'db.php';
	$nim = @$_GET['nim'];
	echo "$nim";
	$sql="DELETE from mhs WHERE nim= '$nim'";   	
   	if ($conn->query($sql)) {    
    	header("Location: mahasiswa.php?op=del");
	} else {    
    	header("edit.php?nim=".$nim."&nofif=del");
	}
 
	// tutup koneksi
	$conn->close();
?>