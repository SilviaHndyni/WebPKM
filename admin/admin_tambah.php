
<?php
    include("../fungsi/core_admin.php");
    if(!empty($_POST["add_record"])) {
        $sql = "INSERT INTO admin (username_admin, password_admin) VALUES (:user, :pass)";
        $stmt = $pdo_conn->prepare( $sql );
        $result = $stmt->execute( array(':user'=>$_POST['user'],':pass'=>$_POST['pass']) );
        if(!empty($result)){
            header('location:index.php?admin=admin');
        }
    }
?>