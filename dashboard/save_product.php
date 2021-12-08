<?php
// Mencegah access langsung
if(!@$_SERVER['HTTP_REFERER']){
    die("Access Danied !");
}

include "config.php";

//  Get Data
$id_product = $_POST["id_product"];
$kd_product = $_POST["kd_product"];
$nm_product = $_POST["nm_product"];
$id_cat = $_POST["id_cat"];
$harga = $_POST["harga"];
$stok = $_POST["stok"];
$diskon = $_POST["diskon"];
$desc = $_POST["desc_product"];
$status = $_POST["status"];

// Upload File
if($_FILES["foto"]["name"]!=""){
    $target_dir = "../assets/uploads/product/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
    // Nama file yang di upload baru
    $foto = $_FILES["foto"]["name"];
} else {
    // JIka tidak milih file foto maka menggunakan nama file yang pernah disimpan
    $foto = $_POST["old_foto"];
}

// Prepare Save
if($id_product==""){
    $sql = "INSERT INTO wec_product VALUES(NULL,'$kd_product','$nm_product','$id_cat','$harga','$stok','$desc','$diskon','$foto','$status')";
} else {
    $sql = "UPDATE wec_product SET kd_product = '$kd_product',nm_product='$nm_product',id_cat='$id_cat',harga='$harga',stok='$stok',diskon='$diskon',desc_product='$desc',status='$status',foto='$foto' WHERE id_product = $id_product";
}

// Eksekusi
$result = $db->query($sql);
if($result==1){
    header("location:product.php?mess=Data berhasil disimpan !&type=success");
} else {
    header("location:product.php?mess=Data gagal disimpan !&type=danger");
}