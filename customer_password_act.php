<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

session_start();

if (isset($_POST['ganti'])) {
    
    $id = $_SESSION['customer_id'];
    $password = md5($_POST['password']);
    
    $gantipw = mysqli_query($koneksi,"update customer set customer_password='$password' where customer_id='$id'");
    
    if ($gantipw) {
        $_SESSION['info'] = 'sukses';
        header("location:customer_password.php?alert=sukses");
    }else{
        // 
    }
}
