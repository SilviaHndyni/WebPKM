<?php 
session_name("verify");
session_start();
if (isset($_SESSION['login_admin']) == '')
{
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php
    include("../fungsi/core_admin.php");
    ?>
    
</head>
<body>
<div class="wrapper">
<?php
    include("sidebar.php");
    ?>
    <div class="main-panel">
    <?php
    include("nav.php");
    $admin=isset($_GET['admin']) ? $_GET['admin']: 'admin';
    include_once($admin.".php");
?>
</div>
</div>
</body>
</html>
