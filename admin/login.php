<?php
    session_name("verify");
    session_start();
    include("../fungsi/core_admin.php");
    ?>
    <div id="page">
 <div class="isi back-login" id="login">
            <div class="isi-kiri login hitam">
            <form method="post">
                    <h4 align="center">Login Admin</h4>
                    <h5 id="username" class="col-12 col-md-5">Username</h5><input name="username" class="col-12 col-md-6" type="text"
                        placeholder="username">
                    <h5 id="password" class="col-12 col-md-5">Password</h5><input name="password" class="col-12 col-md-6" type="password"
                        placeholder="password">
                        <h6 class="merah"><?php
                            if($_SERVER["REQUEST_METHOD"] == "POST")
                            {
                            $pengguna = $pdo_conn->prepare('SELECT * FROM admin WHERE username_admin = :username and password_admin = :password');
                            $pengguna->execute(array(
                                            ':username' => $_POST['username'],
                                            ':password' => $_POST['password']
                                            ));
                            $row = $pengguna->fetch(PDO::FETCH_ASSOC);
                            if(empty($row['username_admin'])){
                                    echo "Username atau password yang dimasukan tidak valid";
                                }
                            else {
                                $_SESSION['login_admin'] = $row['username_admin'];
                                $_SESSION['level_admin'] = $row['id_level'];
                                header("location: index.php");
                                
                                }
                            }
                        ?>  </h6>
                    
                    <input id="masuk" class="btn btn-light kanan hitam" type="submit" name="masuk" value="Login" />
                
                    
                </form>
            </div>

        </div>
        
        </div>