<?php 
    include_once("function/koneksi.php");

    $npm = $_POST['npm'];
    $password = $_POST['password'];

    $query = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm='$npm' and password='$password'");

    if(mysqli_num_rows($query) == 0){
        header("location:index.php?page=login&notif=true");
    }else{
        $row=mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['nama']=$row['nama'];
        header("location:index.php?page=profile");
    }
?>