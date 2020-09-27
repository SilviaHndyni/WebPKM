
<?php
    include("../fungsi/core_admin.php");
    $level=3;
    if(!empty($_POST["add_record"])) {
        $sql = "INSERT INTO admin (username_admin, password_admin, id_level) VALUES (:user, :pass, :lev)";
        $stmt = $pdo_conn->prepare( $sql );
        $result = $stmt->execute( array(':user'=>$_POST['user'],':pass'=>$_POST['pass'],':lev'=> $level) );
        if(!empty($result)){
            header('location:index.php?admin=admin');
        }
    }
?>