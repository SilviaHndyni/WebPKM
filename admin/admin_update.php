<?php
include("../fungsi/core_admin.php");
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("update admin set username_admin='" . $_POST[ 'user' ] . "', password_admin='" . $_POST[ 'pass' ]. "' where id_admin=" . $_GET["id_admin"]);
	$result = $pdo_statement->execute();
	header('location:index.php?admin=admin');
}
?>