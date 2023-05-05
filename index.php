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


<?php 
    include "controller/koneksi.php";
    require "controller/menu.php";
    if(!konek()) {
        die("Koneksi Error");
    }
    $querySQL = "SELECT * FROM beranda";
    $execQuerySQL = mysqli_query(konek(), $querySQL);

    // Mengecek apakah ada data atau tidak
    if(mysqli_num_rows($execQuerySQL) > 0) {   
        while($row = mysqli_fetch_assoc($execQuerySQL)) {      
?>

    
    <section class="hero-section container">
        <div class="container d-flex justify-content-center">
            <img src="../asset/<?= $row['gambar'] ?>" alt="man" class="rounded ">              
        </div>
            <div class="row">
                <div class="col-sm-12 header-text mt-5">
                <h3 class="text-center fw-semibold">
                    Hello I'm <br>Rizki Fadillah
                </h3>
            </div>
        </div>
        <div class="container latest-content">
            <div class="row">
                <div class="col-sm-6 latest-text mt-5">
                    <h3 class="fw-semibold mt-4 ">
                        Latest <br>Explorations
                    </h3>
                    <p class="fw-regular lh mt-4">
                        Lorem ipsum dolor sit amet consectetur adipisicinnecessitatibus<br>  quidem sunt culpa facere omnis sapiente veniam reiciendis inc<br>  idunt odit eaque laudantium!
                    </p>
                    <img src="asset/<?= $row['gambar1'] ?>" alt="man" class="rounded mt-5 img-fluid ">
                </div>
                <div class="col-sm-6">
                <img src="asset/<?= $row['gambar2'] ?>" alt="man" class="rounded mb-5 img-fluid ">
                <img src="asset/<?= $row['gambar3'] ?>" alt="man" class="rounded img-fluid ">
                </div>
            </div>
        </div>

    
    <div class="follow-us ">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-4 link-porto">
                    <h1 class="border border-3 border-white rounded-pill py-4">
                        <a href="<?= $row['github'] ?>">Github</a>
                    </h1>
                </div>
                <div class="col-sm-4 link-porto">
                    <h1 class="border border-3 border-white rounded-pill py-4">
                        <a href="<?= $row['dribbble'] ?>">Dribbble</a>
                    </h1>
                </div>
                <div class="col-sm-4 link-porto">
                    <h1 class="border border-3 border-white rounded-pill py-4">
                        <a href="<?= $row['linkedIn'] ?>">LinkedIn</a>
                    </h1>
                </div>
            </div>
        </div>
        </div>
    <?php
                }
            }
        ?>
        <div class="container rounded-5 footer-copy">
            <h1 class="text-white">
                Do you have any <br><span class="fst-italic">suggestion</span> ?
            </h1>
            <img src="asset/copy.png" alt="copyright-footer" class="img-fluid footer-img">
        </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to top</button>
    </div>
    </section>

    <?php
        include "controller/footer.php"
    ?>

</body>
</html>
<script>
    import { useState, useEffect } from 'react';

    export default function ScrollToTopButton() {
    const [isVisible, setIsVisible] = useState(false);

    const handleScroll = () => {
        setIsVisible(window.pageYOffset > 20);
    };

    useEffect(() => {
        window.addEventListener('scroll', handleScroll);

        return () => {
        window.removeEventListener('scroll', handleScroll);
        };
    }, []);

    const handleClick = () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    return (
        <button
        className="scroll-to-top"
        onClick={handleClick}
        style={{ display: isVisible ? 'block' : 'none' }}
        >
        Scroll to Top
        </button>
    );
    }

    import ScrollToTopButton from '../components/ScrollToTopButton';

    export default function Home() {
    return (
        <div>
        {/* your content here */}
        <ScrollToTopButton />
        </div>
    );
    }

</script>
