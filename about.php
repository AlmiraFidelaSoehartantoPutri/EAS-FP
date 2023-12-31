<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/qumark.png" alt="">
         <h3>Mengapa harus memilih kami?</h3>
         <p>Membeli makanan organik di tempat kami memberikan pengalaman belanja yang unggul, karena kami berkomitmen menyediakan produk berkualitas tinggi yang bebas dari pestisida dan bahan kimia berbahaya. Dengan menyediakan pilihan makanan organik terbaik, kami tidak hanya mendukung gaya hidup sehat, tetapi juga memberikan kepuasan kepada pelanggan yang peduli akan aspek kesehatan dan keberlanjutan lingkungan.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/grocery.png" alt="">
         <h3>Apa saja yang kami berikan untuk Anda?</h3>
         <p>Kami menyediakan produk organik berkualitas tinggi dengan berbagai pilihan, jaminan kesehatan melalui produk bebas pestisida, layanan pelanggan yang ramah, komitmen lingkungan, dan kemudahan berbelanja untuk memenuhi kebutuhan Anda.</p>
         <a href="shop.php" class="btn">Toko kami</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Review Pembeli</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/chan.jpg" alt="">
         <p>Produk organik yang saya beli sangat berkualitas tinggi. Buah-buahan dan sayuran terlihat segar dan memiliki rasa alami yang luar biasa. Saya senang bisa mendapatkan pilihan makanan organik tanpa harus meninggalkan rumah. Saya sangat puas..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bang Chan</h3>
      </div>

      <div class="box">
         <img src="images/lino.jpg" alt="">
         <p>Saya mengalami sedikit kebingungan saat melakukan pembayaran, tetapi tim layanan pelanggan dengan cepat merespons pertanyaan saya dan memberikan bantuan yang sangat membantu. Pelayanan pelanggan yang responsif merupakan nilai tambah yang besar.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Lee Minho</h3>
      </div>

      <div class="box">
         <img src="images/yuki.jpg" alt="">
         <p>Meskipun produk organik cenderung lebih mahal, saya merasa bahwa harga-harga di e-grocery ini masih wajar. Diskon dan penawaran khusus yang sering diberikan membuatnya menjadi pilihan yang terjangkau untuk memenuhi kebutuhan makanan organik saya.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nakashima Yuki</h3>
      </div>

      <div class="box">
         <img src="images/jennie.jpg" alt="">
         <p>Barang-barang saya tiba dengan baik dan aman. Pengemasan sangat baik, memastikan produk tetap segar selama pengiriman. Proses pengiriman juga cepat dan efisien, sesuai dengan yang dijanjikan. Overall saya sangat puas</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kim Jennie</h3>
      </div>

      <div class="box">
         <img src="images/taehyung.jpeg" alt="">
         <p>Toko ini menawarkan berbagai produk organik, mulai dari buah-buahan, sayuran, produk susu, hingga makanan siap saji organik. Keanekaragaman pilihan memungkinkan saya untuk menjaga pola makan sehat.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kim Taehyung</h3>
      </div>

      <div class="box">
         <img src="images/sakura.jpg" alt="">
         <p>Saya lumayan puas dengan semua fitur yang ada di website ini. Semuanya memudahkan saya untuk membeli makanan organik, bahan-bahannya juga fresh. Saya tidak menyesal beli disini. Kerennnnn pokoknyaa!!!!!!!!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Miyawaki Sakura</h3>
      </div>

   </div>

</section>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>