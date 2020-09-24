<?php
require_once("koneksi.php");
$stmt = $pdo_conn->prepare("SELECT * FROM warung ORDER BY id ASC");
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Libre+Baskerville&family=Marck+Script&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Banjar</title>
  </head>
  <body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top mb-5">
  <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="70" height="40" class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="wisata.php">Wisata</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link active" href="makan.php">Kuliner<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="penginapan.php">Penginapan</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" href="index.html#info">About</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End Navbar -->

<!-- Content -->
<div class="container-xl" id="content">
    <div class="row">
      <div class="col-lg-4">
        <hr>
      </div>
      <div class="col-lg-4">
        <p class="text-center font-weight-bold font-italic judul">KULINER</p>
      </div>
      <div class="col-lg-4">
        <hr>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mt-3">
      <?php
        if(!empty($result)) { 
          foreach($result as $row) {
      ?>
        <div class="col mb-5">
          <div class="card h-100 text-center bg-transparent border-0">
            <div style="height: 240px">
              <?php echo "<a href='images/$row[gambar]' class='image'>";
                echo "<img src='images/$row[gambar]' class='foto' alt=''/>";?>
              </a>
            </div>
            
            <div class="card-body caption text-center">
              <p class="card-text"><?php echo $row["nama"]; ?></p>
              <a href="detailmakan.php?display_id=<?php echo $row["id"];?>"; title="<?php echo $row["nama"];?>">
                <span style="font-family: 'Marck Script', cursive; margin-top: -15px;">Lihat</span>
              </a>
            </div>
          </div>
        </div>
        <?php
          }
          }
        ?>
    </div>
  </div>
<!-- End Content -->

<!-- Footer -->
<footer class="page-footer font-small bg-dark mt-4">
  <!-- Copyright -->
  <div class="footer-copyright text-center text-light py-2">
  <small>Copyright ©2021 Web Wisata - All Rights Reserved <br> Design by Gusti, Rezi and Silvia</small>
  </div>
  <!-- Copyright -->
</footer>
<!-- End Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>