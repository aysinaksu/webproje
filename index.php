<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <title> Anasayfa | Etkinlik Yönetim Sistemi</title>
    
    <link rel="stylesheet" href="css/style.css">
    
    <script src="https://kit.fontawesome.com/03a8bbed4c.js" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    <section id="menu">
        <div id="logo">Etkinlik Yönetim Sistemi </div>
        <nav>
            <a href=""><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-book"></i>Duyurular</a>
            <a href=""><i class="fa-solid fa-gift ikon"></i>Etkinlikler</a>
            <a href=""><i class="fa-solid fa-info ikon"></i>Giriş Ekranı</a>
        </nav>
    </section> 
    
    <section id="anasayfa">
        <div id="black">
        </div>
        
        <div id="icerik">
            <h2>Etkinlik Yönetim Sistemi</h2>
            <hr widht=300 aling=left>
            <p>Buraya sayfa hakkında bildiler yazıcaz. </p>
        </div>
    </section>
    
    <section id="duyurular">
        <h3>Duyurular</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">DUYURULAR</h5>
            </div>
            <div id="sag"> 
                <p id="psag">Her etkinlik için bilet kontrolü yapılmaktadır.</p>
                <p id="psag">Etkinlikler için yaş sınırı vardır.</p>
            </div>
            <img src="img/r8.jpg" alt="" class="img-fluid mt100">
            
            <p id="pson">Buraya ne yazacağımı bilemedim</p>
        </div>
    </section>
    
    <section id="etkinlikler">
    <div class="container">
        <h3>Etkinlikler</h3>
        
        <div class="owl-carousel owl-theme">
            <div class="card item" >
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="cardbaslik">Etkinlik</h5>
                <p class="cardp">Etkinlik hakkında bilgi</p>
            </div>
            
            <div class="card item" >
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="cardbaslik">Etkinlik</h5>
                <p class="cardp">Etkinlik hakkında bilgi</p>
            </div>
            
             
            <div class="card item" >
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="cardbaslik">Etkinlik</h5>
                <p class="cardp">Etkinlik hakkında bilgi</p>
            </div>
            
            <div class="card item" >
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="cardbaslik">Etkinlik</h5>
                <p class="cardp">Etkinlik hakkında bilgi</p>
            </div>
            
            <div class="card item" >
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="cardbaslik">Etkinlik</h5>
                <p class="cardp">Etkinlik hakkında bilgi</p>
            </div>
            
        </div>
        </div>
    </section>
    
    <section id="girisekrani">
        <div class="container">
            <h3 id="h3girisekrani">Giriş Ekranı</h3>
            
            <form action="index.php" method="post">
            <div id="girisopak">
                <div id="formlar">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="etkinlik" placeholder="Etkinlik Türü" required class="form-control">
                    </div>
                    <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>
                    
                    <input type="submit" value="Giriş">
                </div>
            </div>
            </form>
            
            <footer>
                <div id="copyright">2025 | Web Proje | Ayşin Ebrar Aksu</div>
                <a href="#menu"><i class="fa-solid fa-up-long" id="up"></i></a>
            </footer>
            
            
        </div>
    </section>
   
<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>    
<script src="owl/owl.carousel.min.js"></script>
    
<script src="owl/script.js"></script>
    
</body>
    
</html>


<?php

include("baglanti.php");

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["etkinlik"], $_POST["mesaj"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $etkinlik=$_POST["etkinlik"];
    $mesaj=$_POST["mesaj"];
    
    $ekle="INSERT INTO girisekrani(adsoyad, telefon, email, etkinlik, mesaj) VALUES ('$adsoyad','$telefon','$email','$etkinlik','$mesaj')";
    
    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Girişiniz Yapılmıştır.')</script>";
    }
    
    else{
        echo "<script>alert('Bir hata oluştu.')</script>";
    }
}

?>