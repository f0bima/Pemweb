<?php 
$nim = @$_GET['nim'];
$sql="SELECT * from mhs WHERE nim= '$nim'";
                    
$hasil= mysqli_query($conn, $sql);
$data = mysqli_fetch_array($hasil);
echo "
<form action='update-mhs.php' method='POST'>
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>NIM</div>
                <input disabled='disabled' type='text' name='nim'  value=".$data['nim']." class='form-control'>
                <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>NAMA</div>
                <input type='text' name='nama'  value='".$data['namamhs']."' class='form-control'>
                <div class='input-group-addon'>
                <i class='fa fa-user'></i></div>
        </div>
    </div>
    <div class='form-group'>
        <div class='input-group'>
            <div class='input-group-addon'>TGL/LAHIR</div>
                <input type='date' name='tgl'  value=".$data['tgl']." class='form-control'>
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
    <input type='hidden' name='nim'  value=".$data['nim'].">
    <input type='submit' name='submit' class='btn btn-primary btn-lg btn-block'>    
</form>   ";        
 // tutup koneksi
$conn->close();
?>   