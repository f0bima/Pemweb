<?php 
$nip = @$_GET['nip'];
$sql="SELECT * from dosen WHERE nip= '$nip'";
                    
$hasil= mysqli_query($conn, $sql);
$data = mysqli_fetch_array($hasil);
echo "
<form action='update-dsn.php' method='POST'>
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>NIP</div>
                <input disabled='disabled' type='text' name='nip'  value=".$data['nip']." class='form-control'>
                <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>NAMA</div>
                <input type='text' name='namadsn'  value='".$data['namadsn']."' class='form-control'>
                <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>    
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>ALAMAT</div>
            <input type='text' name='alm'  value=".$data['alamat']." class='form-control'>
            <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>
    ";
    echo "<div class='form-group'>
            <div class='input-group'>
            <div class='input-group-addon'>GENDER</div>
            ";                                     
    if ($data['jk']=="Laki-Laki") {
        echo "
        <label for='inline-radio1' class='form-check-label form-control'>
            <input type='radio' name='jk' value='Laki-Laki' checked>LAKI
        </label>
        <label for='inline-radio1' class='form-check-label form-control'>
            <input type='radio' name='jk' value='Perempuan'>PEREMPUAN                            
        </label>
        ";
    }
    else {                            
        echo "
        <label for='inline-radio1' class='form-check-label form-control'>
            <input type='radio' name='jk' value='Laki-Laki'>LAKI
        </label>
        <label for='inline-radio1' class='form-check-label form-control'>
            <input type='radio' name='jk' value='Perempuan' checked>PEREMPUAN    
        </label>";
    };                            
    echo "<div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
            </div>
        </div>";                           
    echo "
    <input type='hidden' name='nip'  value=".$data['nip'].">
    <input type='submit' name='submit' class='btn btn-primary btn-lg btn-block'>    
</form>   ";        
 // tutup koneksi
$conn->close();
?>   