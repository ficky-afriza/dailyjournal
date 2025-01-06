<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Daily Journal</title>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
</head>
<body>

    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Daily Journal</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Tambahkan menu sesuai kebutuhan -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- nav end -->  
     <!--home-->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <right>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="article.html">Article</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="gallery.html">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                  </li>
          </right>
             
          </div>
        </div>
      </nav>

    <nav class="bg-info-subtle fw-bold display-4 pb-3">Create Memories, Save <p>Memories, Everyday</p><p><h1>Mencatat kegiatan sehari-hari saat di kampus</h1></p></nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!--home end-->        
<!-- article begin -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <right>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="article.html">Article</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="gallery.html">Gallery</a>
                  </li>
          </right>
             
          </div>
        </div>
      </nav>

    <center><h1>Article</h1></center>
    
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Senin</h5>
          <p class="card-text">Di hari senin saya bangun pagi, makan pagi, mandi, siap-siap berangkat ke kampus setelah sampai dikampus saya menunggu jam masuk perkuliahan dan setelah waktunya jam masuk saya mengikuti pembelajaran perkuliahan di hari senin setelah selesainya perkuliahan saya waktunya untuk pulang kerumah</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Selasa</h5>
          <p class="card-text">Di hari selasa saya bangun pagi, makan pagi, mandi, siap-siap berangkat ke kampus setelah sampai dikampus saya menunggu jam masuk perkuliahan dan setelah waktunya jam masuk saya mengikuti pembelajaran perkuliahan di hari selasa setelah selesainya perkuliahan saya waktunya untuk pulang kerumah</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Rabu</h5>
          <p class="card-text">Di hari rabu saya bangun pagi, makan pagi, mandi, siap-siap berangkat ke kampus setelah sampai dikampus saya menunggu jam masuk perkuliahan dan setelah waktunya jam masuk saya mengikuti pembelajaran perkuliahan di hari rabu setelah selesainya perkuliahan saya waktunya untuk pulang kerumah</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Kamis</h5>
          <p class="card-text">Di hari kamis saya bangun pagi, makan pagi, mandi, siap-siap berangkat ke kampus setelah sampai dikampus saya menunggu jam masuk perkuliahan dan setelah waktunya jam masuk saya mengikuti pembelajaran perkuliahan di hari kamis setelah selesainya perkuliahan saya waktunya untuk pulang kerumah</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Jum'at</h5>
          <p class="card-text">Di hari jum'at saya bangun pagi, makan pagi, mandi, siap-siap berangkat ke kampus setelah sampai dikampus saya menunggu jam masuk perkuliahan dan setelah waktunya jam masuk saya mengikuti pembelajaran perkuliahan di hari jum'at setelah selesainya perkuliahan saya pulang jam 12 siang untuk melakukan sholat jum'at terlebih dahulu setelah selesai waktunya untuk pulang kerumah</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  


<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
 <!--gallery begin-->
     <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">My Daily Journal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <right>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="article.html">Article</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="gallery.html">Gallery</a>
                  </li>
          </right>
             
          </div>
        </div>
      </nav>
      <center><h1>Gallery</h1></center>
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuLvXr-HkzNQz7o8qyoA3JisuR4pvCHKORyo5jKKf-nFfdZTNbIJL82XhQmpCXCxOSbV8&usqp=CAU" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <center><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
      </svg></center>
      <center>Ficky afriza @ 2024</center>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--gallery end-->

</body>
</html>
