<?php
    session_start();
    include "db.php";
    if(!isset($_SESSION['login_user'])){
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
    <title>Pubztyo.co.id</title>
</head>
<body>
<div class="header">
        <div class="logo">
            <img src="https://storage.googleapis.com/a1aa/image/uCpJd4cXocrMMp6ZYm5GLRjWTV6uDrEDSBtowqQPwgIW3KeJA.jpg" alt="Dream.co.id logo" width="150" height="40">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="What do you want to know today ?">
        </div>
    </div>
    <div class="nav">
        <a onclick="openTab(event, 'politik')">POLITIK</a>
        <a onclick="openTab(event, 'pemerintahan')">PEMERINTAHAN</a>
        <a onclick="openTab(event, 'pendidikan')">PENDIDIKAN</a>
        <a onclick="openTab(event, 'artis')">ARTIS</a>
        <a onclick="openTab(event, 'ekonomi')">EKONOMI</a>
        <a onclick="openTab(event, 'teknologi')">TEKNOLOGI</a>
        <a onclick="openTab(event, 'olahraga')">OLAHRAGA</a>
        <a onclick="openTab(event, 'hiburan')">HIBURAN</a>
        <a onclick="openTab(event, 'sepakbola')">SEPAK BOLA</a>
        <a onclick="openTab(event, 'more')">MORE</a>
        <a href="logout.php">KELUAR</a>
    </div>

    <div id="politik" class="tab-content">
        <h2>Berita Politik</h2>
        <div class="wrappermaaf" id="wrappermaafpolitik">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'politik' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php 
                } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafpolitik').style.display = 'block';
                            </script>
                         ";
                }
            ?>
        </div>
    </div>


    <div id="pemerintahan" class="tab-content">
        <h2>Berita Terkait Pemerintahan</h2>
        <div class="wrappermaaf" id="wrappermaafpemerintahan">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'pemerintahan' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafpemerintahan').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="pendidikan" class="tab-content">
        <h2>Berita Terkait Pendidikan</h2>
        <div class="wrappermaaf" id="wrappermaafpendidikan">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'pendidikan' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafoendidikan').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="artis" class="tab-content">
        <h2>Berita Seputar Artis</h2>
        <div class="wrappermaaf" id="wrappermaafartis">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'artis' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafartis').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="ekonomi" class="tab-content">
        <h2>Berita Tentang Ekonomi</h2>
        <div class="wrappermaaf" id="wrappermaafekonomi">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'ekonomi' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafekonomi').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="teknologi" class="tab-content">
        <h2>Berita Terkait Teknologi</h2>
        <div class="wrappermaaf" id="wrappermaafteknologi">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'teknologi' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafteknologi').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="olahraga" class="tab-content">
        <h2>Berita Seputar Olahraga</h2>
        <div class="wrappermaaf" id="wrappermaafolahraga">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'olahraga' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafolahraga').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="hiburan" class="tab-content">
        <h2>Berita Seputar Hiburan</h2>
        <div class="wrappermaaf" id="wrappermaafhiburan">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'hiburan' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafhiburan').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="sepakbola" class="tab-content">
        <h2>Berita Seputar Sepak Bola</h2>
        <div class="wrappermaaf" id="wrappermaafsepakbola">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'sepakbola' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafsepakbola').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>

    <div id="more" class="tab-content">
        <h2>Berita Lainnya</h2>
        <div class="wrappermaaf" id="wrappermaafmore">
            <p class="maaf" id="maaf">MAAF BERITA BELUM TERSEDIA</p>
        </div>
        <?php
            include "db.php";
            $qry = $koneksi->query("SELECT * FROM berita WHERE kategori_id = 'more' ORDER BY id_berita DESC LIMIT 100")
        ?>
        <div class="news-container">
            <?php
              if($qry->num_rows > 0){
                  while($databerita = $qry->fetch_assoc()) {
            ?>
            <div class="news-item">
                <img alt="<?= $databerita['gambar']; ?>" src="img/<?= $databerita['gambar']; ?>" />
                <p><?= $databerita['judul']; ?></p>
            </div>
            <?php } } else {
                    echo "
                            <script type='text/javascript'>
                                document.getElementById('wrappermaafmore').style.display = 'block';
                            </script>
                         ";
                }
            
            ?>
        </div>
    </div>
    
    
    <script type="text/javascript" src="js/user.js"></script>
</body>
</html>