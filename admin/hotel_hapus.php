<?php
include("../fungsi/core_admin.php");
$stmt=$pdo_conn->prepare("delete from hotel where id=".$_GET['id_hotel']);
$stmt->execute();
header('location:index.php?admin=hotel');
?>