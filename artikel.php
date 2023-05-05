<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <section class="artikel-hero container">
        <div class="container head-text">
            <h1 class="text-center fw-semibold item-1">
                THE ARTICLES 
            </h1>
            <img src="asset/line.png" alt="">
        </div>
    </section>


<?php 
    include "controller/koneksi.php";
    require "controller/menu.php";
    if(!konek()) {
        die("Koneksi Error");
    }
    $querySQL = "SELECT * FROM artikel";
    $execQuerySQL = mysqli_query(konek(), $querySQL);

    // Mengecek apakah ada data atau tidak
    if(mysqli_num_rows($execQuerySQL) >= 1) {   
        while($row = mysqli_fetch_assoc($execQuerySQL)) {      
    ?>
      <section>
        <div class="container content">
            <div class="row mt-3">
                <div class="col-sm-7">
                    <img src="asset/<?= $row['gambar_cover'] ?>" alt="cover1">
                </div>                    
                <div class="col-sm-5">
                    <h2>
                        <?= $row['nama'] ?>
                    </h2>
                    <div class="col-6-spotify mt-5">
                  <div class="card-spotify mb-3 rounded" style="max-width: 300px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="asset/<?= $row['icon'] ?>" class="img-fluid rounded-start" alt="bi_spotify">
                      </div>
                      <div class="col-md-8 align-items-center">
                        <div class="card-body pt-3">
                          <h4 class="card-title fw-semibold text-white">
                            <?= $row['penulis'] ?>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
    </section>
    <?php
                }
            }
        ?>
    <div style="margin-top: 240px;">
    <?php
        include "controller/footer.php"
    ?>
    </div>

</body>
</html>
<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    window.scrollTo({top: 0, behavior: 'smooth'});
    }
</script>
