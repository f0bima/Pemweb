<?php 
$kodemk = @$_GET['kodemk'];
$sql="SELECT * from matkul WHERE kodemk= '$kodemk'";
                    
$hasil= mysqli_query($conn, $sql);
$data = mysqli_fetch_array($hasil);
echo "
<form action='update-mk.php' method='POST'>
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>KODE MK</div>
                <input disabled='disabled' type='text' name='kodemk'  value=".$data['kodemk']." class='form-control'>
                <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>MATA KULIAH</div>
                <input type='text' name='matkul'  value='".$data['matkul']."' class='form-control'>
                <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>    
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>SEMESTER</div>
            <input type='text' name='smt'  value=".$data['smt']." class='form-control'>
            <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>
    
    <input type='hidden' name='kodemk'  value=".$data['kodemk'].">
    <input type='submit' name='submit' class='btn btn-primary btn-lg btn-block'>    
</form>   ";        
 // tutup koneksi
$conn->close();
?>   