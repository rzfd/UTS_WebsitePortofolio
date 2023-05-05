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
    <script src="main.js"></script>
    <title>Document</title>
</head>
<body>
<?php 
    include "controller/koneksi.php";
    require "controller/menu.php";
    if(!konek()) {
        die("Koneksi Error");
    }
    if (isset($_POST['pengirim']) AND isset($_POST['isi_pesan'])) {
        $pengirim = $_POST['pengirim'];
        $isi_pesan = $_POST['isi_pesan'];
        $querySQL = "INSERT INTO pesan (pengirim, isi_pesan) 
        VALUES ('$pengirim', '$isi_pesan')";
        $execSQL = mysqli_query(konek(),$querySQL);
        }
    ?>
      <section>
            <div class="container content-pesan">
                <h1>
                    if you have a message you want to convey through here
                </h1>
            <div class="container">  
            <form id="contact" action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="pengirim" class="fw-bold">Nama</label>             
                    <input type="text" class="form-control" id="pengirim" placeholder="Input Nama" name="pengirim">          
                </div>
                <div class="mb-3 mt-3">
                    <label for="isi_pesan" class="fw-bold">Isi Pesan</label>             
                    <input type="text" class="form-control" id="isi_pesan" placeholder="Isi Pesanmu" name="isi_pesan">   
                <button type="submit" class="btn btn-primary">Simpan</button>  
            </form> 
            </div>
            </div>

        </section>
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
