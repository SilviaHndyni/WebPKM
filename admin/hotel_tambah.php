
<?php
    include("../fungsi/core_admin.php");
    if(!empty($_POST["add_record"])) {
        $nama_gambar = $_FILES['gambar']['name'];
        move_uploaded_file($_FILES['gambar']['tmp_name'], "../images/".$nama_gambar);

        if(!empty($result2)){

        }
        $stmt1 = $pdo_conn-> prepare("SELECT * FROM hotel ORDER BY id DESC LIMIT 1");
        $stmt1 -> execute();
        $result1 = $stmt1->fetchAll();
        
        $sql = "INSERT INTO hotel (nama, alamat, link,  gambar ) VALUES (:nama, :alamat, :link, :gambar)";
        $stmt = $pdo_conn->prepare( $sql );
        
        $result = $stmt->execute(array(':nama' => $_POST['nama'], ':alamat' =>$_POST['alamat'],':link' =>$_POST['link'],':gambar' =>$nama_gambar));
        if(!empty($result)){
            header('location:index.php?admin=hotel');
        }
    }
?>

