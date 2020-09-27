<?php
include("../fungsi/core_admin.php");
$stmt=$pdo_conn->prepare("delete from admin where id_admin=".$_GET['id_admin']);
$stmt->execute();
header('location:index.php?admin=admin');
?>