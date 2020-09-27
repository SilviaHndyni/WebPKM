<?php
include("../fungsi/core_admin.php");
$stmt=$pdo_conn->prepare("delete from destinasi where id=".$_GET['id_destinasi']);
$stmt->execute();
header('location:index.php?admin=destinasi');
?>