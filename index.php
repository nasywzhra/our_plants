<?php
require 'function.php';

$plant = query("SELECT * FROM plants");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Plant</title>
    <link rel="stylesheet" type="text/css" href="oourplant.css">
</head>
<style>
        .project-title:hover{
            transform: scale(1.1);
            z-index: 2;
        }
    </style>
</head>
   
   <body>
    <nav id="navbar">
        <div class ="logo">
        <h1><span style="color:rgb(250, 237, 244);">Our</span>Plant's</h1>
        </div>
        <ul class="link-group">
        <a href="#welcome-section">HOME</a>
        <a href="#main">SALE</a>
        <a href="#footer">CONTACT</a>
        </ul>
    </nav>
    
    <video width="100%" height="auto" src="house.mp4" muted loop autoplay></video>
    <div class= "textvideo">
    <h1>Welcome</h1>
    </div>
    <div class="quotes">
    <h3> "When the environment changes, there must be a corresponding change in life." <span style="color:#facdf1"> - Charles Lindbergh </span></h3>
    </div>


    <section class="showcase">
        <header id="welcome-section">
        <div class="img-home">
            <img src="images/happywplant.jpg" weight="300px" height="410px">
    </div>
            <div class="row">
            <div class="text">
             <h1>Cyber Week Sale</h1> <br>
             <h3>find your favorite <span style="color:#A4BE7B;"> plant </span> here </h3>
             <p>refresh ur home with new vibrant plants this fall.</p>
            </div>
            </div>
        </header>
    </section>
    <div class ="featured">
    <h1>Featured Collections</h1>
    <main id="main">

    <a href="tambahdata.php">Tambah Data Plant</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Color</th>
            <th>Price</th>
            <th>Image</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1 ?>
        <?php foreach($plant as $row) : ?>

        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $row["plantName"] ?></td>
          <td><?= $row["plantColor"] ?></td>
          <td><?= $row["plantPrice"] ?></td>
          <td><img src="images/<?= $row["plantImage"] ?>" alt=""width="50"></td>
          <td>
            <a href="">Ubah</a>
            <a href="hapus.php?id=<?= $row["plantId"];?>" onclick="return confirm('did u really want to delete this?')";>Hapus</a>
          </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach ?>
    </table>
    </div>
<footer>
        <div class="footer-content">
            <h3>Every pleasure is in  OurPlants</h3>
            <p>Kami adalah tujuan tanaman hias online Anda.
               Kami menawarkan berbagai macam tanaman hias dan aksesori yang dikirim langsung dari rumah (hijau) kami ke rumah Anda! </p>
            <p>copyright &copy;2022 codeOpacity. designed by<span>nasywzhra</span></p>
        </div>
        
     </footer>
     </body>
</html>