<?php

session_start();

// Cek Login
$uri = $_SERVER['REQUEST_URI'];
if(isset($_SESSION["login"])){
    if(strpos($uri,'login') !== false) {
        header("location:index.php"); // Dashboard
    }
} else {
    if(strpos($uri,'login') === false) {
        header("location:login.php"); // Login
    }
}
// End Cek Login


include "../libs/koneksi.php";