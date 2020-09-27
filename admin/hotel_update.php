<?php
include("../fungsi/core_admin.php");
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("update hotel set nama='" . $_POST[ 'nama' ]. "', alamat='" . $_POST[ 'alamat' ]. "', link='" . $_POST[ 'link' ]. "' where id=" . $_GET["id_hotel"]);
	$result = $pdo_statement->execute();
    if(!empty($_FILES['gambar']['name'])){
        $nama_gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$nama_gambar);
        $pdo_statement=$pdo_conn->prepare("update hotel set gambar ='".$_FILES['gambar']['name']."' where id=".$_GET['id_hotel']);
        $result = $pdo_statement->execute();
    }
    header('location:index.php?admin=hotel');
}
?>