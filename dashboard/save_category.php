<?php
// Mencegah access langsung
if(!@$_SERVER['HTTP_REFERER']){
    die("Access Danied !");
}

include "config.php";

//  Get Data
$id_cat = $_POST["id_cat"];
$nm_cat = $_POST["nm_cat"];
$desc_cat = $_POST["desc_cat"];

if($id_cat==""){
    $sql = "INSERT INTO wec_category VALUES(NULL,'$nm_cat','$desc_cat')";
} else {
    $sql = "UPDATE wec_category SET nm_cat = '$nm_cat',desc_cat='$desc_cat' WHERE id_cat = $id_cat";
}

// Eksekusi
$result = $db->query($sql);
if($result==1){
    header("location:category.php?mess=Data berhasil disimpan !&type=success");
} else {
    header("location:category.php?mess=Data gagal disimpan !&type=danger");
}
