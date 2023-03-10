<?php
include "function.php";
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $login = mysqli_query($koneksi,"select * from pegawai where username='$username' and password='$password'");
    if(mysqli_num_rows($login) == 0){
        echo '<script language="javascript">alert("User tidak ada!"); document.location="index.php";</script>';
    }else{
        $row = mysqli_fetch_assoc($login);
            if($row['status']=='admin'){
                $_SESSION['admin']=$username;
                echo '<script language="javascript">alert("Anda berhasil Login Sebagai Admin!"); document.location="admin/index.php";</script>';
            }else{
                if($row['status']=='pegawai'){
                    $_SESSION['pegawai']=$username;
                    echo '<script language="javascript">alert("Anda berhasil Login Sebagai Pegawai!"); document.location="pegawai/index.php";</script>';
        }   
    }
}
}
?>