<?php
// Mencegah access langsung
if(!@$_SERVER['HTTP_REFERER']){
    die("Access Danied !");
}

include "config.php";

//  Get Data
$id_product = $_GET["id"];

// Eksekusi
$sql = "DELETE FROM wec_product WHERE id_product = $id_product";
$db->query($sql);

header("location:product.php?mess=Data berhasil disimpan !");

