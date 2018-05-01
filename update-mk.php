<?php 
	include 'db.php';
	include 'ceklogin.php';
	$kodemk = @$_POST['kodemk'];
	$matkul = @$_POST['matkul'];
	$smt = @$_POST['smt'];		
	echo "$nim";
	$sql="UPDATE matkul SET kodemk ='$kodemk' ,matkul='$matkul' ,smt='$smt' WHERE kodemk= '$kodemk'";   	
   	if ($conn->query($sql)) {    
    	header("Location: matkul.php?op=up");
	} else {    
    	header("edit.php?nip=".$kodemk."&nofif=up");
	} 
	// tutup koneksi
	$conn->close();	
?>