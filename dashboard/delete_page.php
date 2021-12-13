<?php
// Mencegah access langsung
if(!@$_SERVER['HTTP_REFERER']){
    die("Access Danied !");
}

include "config.php";

//  Get Data
$id_page = $_GET["id"];

// Eksekusi
$sql = "DELETE FROM wec_pages WHERE id_page = $id_page";
$db->query($sql);

header("location:page.php?mess=Data berhasil disimpan !");

