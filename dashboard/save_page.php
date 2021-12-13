<?php
// Mencegah access langsung
if(!@$_SERVER['HTTP_REFERER']){
    die("Access Danied !");
}

include "config.php";

//  Get Data
$id_page = $_POST["id_page"];
$title_page = $_POST["title_page"];
$tgl_page = date("Y-m-d",strtotime($_POST["tgl_page"]));
$content_page = $_POST["content_page"];
$publish = $_POST["publish"];

if($id_page==""){
    $sql = "INSERT INTO wec_pages VALUES(NULL,'$tgl_page','$title_page','$content_page','$publish')";
} else {
    $sql = "UPDATE wec_pages SET title_page = '$title_page',tgl_page='$tgl_page',content_page='$content_page',publish='$publish' WHERE id_page = $id_page";
}

// Eksekusi
$result = $db->query($sql);
if($result==1){
    header("location:page.php?mess=Data berhasil disimpan !&type=success");
} else {
    header("location:page.php?mess=Data gagal disimpan !&type=danger");
}
