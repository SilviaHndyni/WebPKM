<?php
require_once "koneksi.php";
$select_stmt=$pdo_conn->prepare("select * from warung where id=". @($_GET['display_id']));
$select_stmt->execute();
$result = $select_stmt->fetchAll();

$stmt = $pdo_conn->prepare("SELECT * FROM warung ORDER BY id DESC");
$stmt->execute();
$results = $stmt->fetchAll();

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
        <a class="nav-link" href="index.html">Beranda</a>
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
<?php
  if(!empty($result)) { ?>
    <h3 class="text-center judul"><?php echo $result[0]["nama"];?></h3>
    <div class="container mb-10 mt-5">
        <div class="card" style="width: auto;">
            <div class="row no-gutters bg-dark">
                <div class="col-md-6">
                    <a href="images/<?php echo $result[0]['gambar'];?>" class="image">
                      <img src="images/<?php echo $result[0]['gambar'];?>" class="card-img">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="card-body text-justify text-light">
                        <p class="card-text"><?php echo $result[0]['Deskripsi'];?></p>
                        <p class="card-text"><small>Alamat : <?php echo $result[0]['alamat'];?></small></p>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                          <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <a href="" target="_blank" rel="noopener noreferrer" class="card-text" style="font-size:13px;">Klik disini untuk lihat di Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php } ?>

  <div class="container-xl mt-5" id="content">
    <div class="row">
      <div class="col-lg-5">
        <hr class="my-4">
      </div>
      <div class="col-lg-2">
        <p class="text-center font-weight-bold judul text-muted font-italic">Lainnya</p>
      </div>
      <div class="col-lg-5">
        <hr class="my-4">
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 mt-3">
      <?php
        if(!empty($results)) { 
          foreach($results as $row) {
            if($row["id"] != @($_GET['display_id'])) {
      ?>
        <div class="col mb-5">
          <div class="card h-100 text-center bg-transparent border-0">
            <div style="height: 190px">
              <?php echo "<a href='images/$row[gambar]' class='image'>";
                echo "<img src='images/$row[gambar]' class='foto'/>";?>
              </a>
            </div>
            
            <div class="card-body caption text-center">
              <p class="card-text"><?php echo $row["nama"]; ?></p>
              <a href="detailwisata.php?display_id=<?php echo $row["id"];?>"; title="<?php echo $row["nama"];?>">
                <span style="font-family: 'Marck Script', cursive; margin-top: -15px;">Lihat</span>
              </a>
            </div>
          </div>
        </div>
        <?php
            }
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
    <small>© 2020 Copyright: Silvia</small>
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