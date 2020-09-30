<?php
    session_name("verify");
    session_start();
    include("../fungsi/core_admin.php");
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
  }
  
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }
  
  .form-signin .checkbox {
    font-weight: 400;
  }

  .form-signin .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
  }

  .form-signin .form-control:focus {
    z-index: 2;
  }

  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
    </style>

</head>

  <body class="text-center">
  <form class="form-signin" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Sign In Admin</h1>
  <label for="username" class="sr-only">Username</label>
  <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
  </div>
    <h6 class="merah"><?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $pengguna = $pdo_conn->prepare('SELECT * FROM admin WHERE username_admin = :username and password_admin = :password');
            $pengguna->execute(array(
                        ':username' => $_POST['username'],
                        ':password' => $_POST['password']
                        ));
            $row = $pengguna->fetch(PDO::FETCH_ASSOC);
            if(empty($row['username_admin'])){
                echo "Username atau password yang dimasukkan tidak valid";
            }
            else {
                $_SESSION['login_admin'] = $row['username_admin'];
                $_SESSION['level_admin'] = $row['id_level'];
                header("location: index.php");
            }
        }
        ?>
    </h6>
  <input id="masuk" class="btn btn-primary btn-block" type="submit" name="masuk" value="Login" />
  <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
</form>
</body>

</html>