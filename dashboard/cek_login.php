<?php
// Mencegah access langsung
if(!@$_SERVER['HTTP_REFERER']){
    die("Access Danied !");
}

include "config.php";

//  Get data dari form login login.php
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM wec_users WHERE email = '$email'";
$rsLogin = $db->select($sql);

// Cek Login User
if(count($rsLogin)>0){
    // Jika Berhasil maka cek password
    if($rsLogin[0]["password"]==md5($password)){
        //  JIka berhasik cek password
        
        //  Set Session Login
        $_SESSION["profile"] = $rsLogin[0];
        $_SESSION["login"] = true;

        header("location:index.php");
    } else {
        // Jika tidak berhasil cek password
        header("location:login.php?mess=Maaf Password Salah !&type=danger");
    }
} else {
    // Jika tidak berhasil maka kembali ke halaman login
    header("location:login.php?mess=Maaf email tidak terdaftar!&type=danger");
}