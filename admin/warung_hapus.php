<?php
include("../fungsi/core_admin.php");
$stmt=$pdo_conn->prepare("delete from warung where id=".$_GET['id_warung']);
$stmt->execute();
header('location:index.php?admin=warung');
?>