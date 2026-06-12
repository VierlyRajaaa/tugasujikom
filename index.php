<?php

$menu = [

    [

        "nama" => "Nasi Kucing",

        "gambar" => "https://images.unsplash.com/photo-1516684732162-798a0062be99?w=600",

        "deskripsi" => "makanan khas Indonesia berupa porsi nasi yang sangat kecil",

        "harga" => "Rp 5.000",

        "wa" => "6285748159338"

    ],

    [

        "nama" => "Aneka Bakaran",

        "gambar" => "https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=600",
        
        "deskripsi" => " untuk berbagai macam makanan yang diolah dengan cara dibakar.",
        
        "harga" => "Rp 1.000",
        
        "wa" => "6285748159338"

    ],

    [

        "nama" => "Sate Telur Puyuh",

        "gambar" => "https://images.unsplash.com/photo-1529042410759-befb1204b468?w=600",

        "deskripsi" => "Sate Telur Puyuh adalah jajanan khas Indonesia berupa telur.",

        "harga" => "Rp 2.000",

        "wa" => "6285748159338"

    ],

    [

        "nama" => "Kopi Susu",

        "gambar" =>"https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600",
        
        "deskripsi" => "Minuman ini paling enak diminum saat cuaca dingin.",
         
        "harga" => "Rp 8.000",

        "wa" => "6285748159338"

    ]

];

?>



<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Angkringan Vierly Rajaa</title>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">



<style>

.hero{

    height:90vh;

    background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),

    url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=1600');

    background-size:cover;

    background-position:center;

    color:white;

}



.card img{

    height:200px;

    object-fit:cover;

}



.btn-wa{

    background:#25D366;

    color:white;

}



.btn-wa:hover{

    background:#1da851;

    color:white;

}

</style>

</head>



<body>



<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <div class="container">

    <a class="navbar-brand fw-bold" href="#">

        🍢 Angkringan Vierly Rajaa

    </a>

  </div>

</nav>



<!-- HERO -->

<section class="hero d-flex align-items-center text-center">

    <div class="container">

        <h1 class="display-4 fw-bold">

            Angkringan Vierly Rajaa

        </h1>

        <p class="lead">

            Nikmat • Murah • Mengenyangkan

        </p>



        <a href="#menu" class="btn btn-warning btn-lg mt-3">

            Lihat Menu

        </a>

    </div>

</section>



<!-- MENU -->

<section id="menu" class="py-5 bg-light">

<div class="container">



    <h2 class="text-center mb-5 fw-bold">Menu Favorit</h2>



    <div class="row g-4">



        <?php foreach($menu as $m): ?>



        <div class="col-md-3">

            <div class="card shadow h-100">

                <img src="<?= $m['gambar']; ?>" class="card-img-top">

                <div class="card-body">

                    <h5><?= $m['nama']; ?></h5>

                    <p><?= $m['deskripsi']; ?></p>

                    <h6 class="text-danger"><?= $m['harga']; ?></h6>



                    <a href="https://wa.me/<?= $m['wa']; ?>?text=Halo,%20saya%20ingin%20memesan%20<?= urlencode($m['nama']); ?>"

                       class="btn btn-wa w-100 mt-2"

                       target="_blank">

                        Pesan

                    </a>

                </div>

            </div>

        </div>



        <?php endforeach; ?>



    </div>



</div>

</section>



<!-- FOOTER -->

<footer class="bg-dark text-white text-center py-3">

    © <?= date('Y'); ?> Angkringan Vierly Rajaa

</footer>



</body>

</html> ini diganti multipage 

