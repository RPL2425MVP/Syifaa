<?php
// Halaman Layanan Klinik
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Klinik - Klinik Online</title>
  <style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
    body{background:#f9faff;color:#333;}
    header{display:flex;justify-content:space-between;align-items:center;padding:15px 8%;background:#fff;box-shadow:0 2px 8px rgba(0,0,0,0.05);}
    .logo{font-weight:700;color:#007bff;font-size:1.2rem;}
    nav a{text-decoration:none;color:#333;margin-left:20px;font-size:0.95rem;transition:0.3s;}
    nav a:hover{color:#007bff;}
    .btn-login{background:#007bff;color:#fff!important;padding:8px 14px;border-radius:6px;}
    .layanan-container{padding:60px 8%;}
    h1{text-align:center;color:#007bff;margin-bottom:30px;}
    .layanan-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:30px;}
    .card{background:#fff;padding:20px;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.05);transition:0.3s;}
    .card:hover{transform:translateY(-5px);}
    .card img{width:80%;border-radius:10px;margin-bottom:15px;height:180px;object-fit:cover;}
    .card h3{color:#007bff;margin-bottom:10px;}
    .card p{font-size:0.9rem;color:#555;}
    .back{display:inline-block;margin-top:40px;text-decoration:none;padding:10px 20px;background:#007bff;color:#fff;border-radius:6px;}
    footer{background:#007bff;50olor:white;text-align:center;padding:15px;margin-top:50px;}
  </style>
</head>
<body>
  <header>
    <div class="logo">🩺 KLINIK ONLINE</div>
    <nav>
      <a href="home.php">Home</a>
      <a href="layanan.php">Layanan Klinik</a>
      <a href="#">Dokter</a>
      <a href="#">Apotek</a>
      <a href="#">Kontak</a>
      <a href="#" class="btn-login">Login</a>
    </nav>
  </header>

  <section class="layanan-container">
    <h1>Layanan Klinik Kami</h1>
    <div class="layanan-grid">
      <div class="card">
        <img src="img/andi.jpg" alt="Umum">
        <h3>Pemeriksaan Umum</h3>
        <p>Layanan pemeriksaan kesehatan umum oleh dokter profesional.</p>
      </div>
      <div class="card">
        <img src="img/siti.jpg" alt="Gigi">
        <h3>Perawatan Gigi</h3>
        <p>Layanan pemeriksaan dan perawatan gigi modern.</p>
      </div>
     
      <div class="card">
        <img src="https://cdn.pixabay.com/photo/2015/08/11/20/09/pediatrician-884140_1280.jpg" alt="Anak">
        <h3>Pemeriksaan Anak</h3>
        <p>Pelayanan ramah untuk anak-anak dan balita.</p>
      </div>
    </div>

    <center>
      <a href="home.php" class="back">← Kembali ke Beranda</a>
    </center>
  </section>

  <footer>
    <p>© 2025 Klinik Online - Semua Hak Dilindungi</p>
  </footer>
</body>
</html>
