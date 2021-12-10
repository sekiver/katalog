<?php 
session_start();
session_destroy(); // menghilangkan memori session
header("location:login.php");