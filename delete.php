<?php
	include 'db.php';
	session_start(); 
	if (!isset($_SESSION['login'])) {
		header("Location: page-login.php");
	}
	else {		
		if (isset($_GET['nim'])) {
			$nim = @$_GET['nim'];		
			$sql="DELETE from mhs WHERE nim= '$nim'";   	
		   	if ($conn->query($sql)) {    
		    	header("Location: mahasiswa.php?op=del");
			} else {    
		    	header("edit.php?nim=".$nim."&nofif=del");
			}
		}
		elseif (isset($_GET['nip'])) {
			$nip = @$_GET['nip'];		
			$sql="DELETE from dosen WHERE nip= '$nip'";   	
		   	if ($conn->query($sql)) {    
		    	header("Location: dosen.php?op=del");
			} else {    
		    	header("edit.php?nip=".$nip."&nofif=del");
			}
		}
		elseif (isset($_GET['kodemk'])) {
			$kodemk = @$_GET['kodemk'];		
			$sql="DELETE from matkul WHERE kodemk= '$kodemk'";   	
		   	if ($conn->query($sql)) {    
		    	header("Location: matkul.php?op=del");
			} else {    
		    	header("edit.php?kodemk=".$kodemk."&nofif=del");
			}
		}
	}
 
	// tutup koneksi
	$conn->close();
?>