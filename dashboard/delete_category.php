<?php
// Mencegah access langsung
if(!@$_SERVER['HTTP_REFERER']){
    die("Access Danied !");
}

include "config.php";

//  Get Data
$id_cat = $_GET["id"];

// Eksekusi
$sql = "DELETE FROM wec_category WHERE id_cat = $id_cat";
$db->query($sql);

header("location:category.php?mess=Data berhasil disimpan !");