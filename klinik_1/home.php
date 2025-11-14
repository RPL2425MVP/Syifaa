<?php
// Halaman utama Klinik Online
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Klinik Online</title>
  <style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:'Poppins',sans-serif;}
    body{background:#f9faff;color:#333;}
    header{display:flex;justify-content:space-between;align-items:center;padding:15px 8%;background:#fff;box-shadow:0 2px 8px rgba(0,0,0,0.05);}
    .logo{font-weight:700;color:#007bff;font-size:1.2rem;}
    nav a{text-decoration:none;color:#333;margin-left:20px;font-size:0.95rem;transition:0.3s;}
    nav a:hover{color:#007bff;}
    .btn-login{background:#007bff;color:#fff!important;padding:8px 14px;border-radius:6px;}
    .hero{display:flex;align-items:center;justify-content:space-between;padding:60px 8%;background:#e9f2ff;flex-wrap:wrap;}
    .hero-text{max-width:500px;}
    .hero-text h1{font-size:2.4rem;color:#222;margin-bottom:15px;}
    .hero-text p{color:#555;margin-bottom:25px;}
    .buttons{display:flex;gap:10px;}
    .btn{text-decoration:none;padding:10px 20px;border-radius:6px;font-weight:600;display:inline-block;}
    .btn.primary{background:#007bff;color:white;}
    .btn.secondary{border:1px solid #007bff;color:#007bff;background:white;}
    .hero-image img{width:360px;max-width:100%;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,0.1);}
    .features{display:flex;justify-content:center;gap:40px;padding:60px 8%;background:#fff;flex-wrap:wrap;}
    .feature{background:#f9faff;border-radius:12px;text-align:center;padding:30px;width:280px;box-shadow:0 4px 12px rgba(0,0,0,0.05);transition:0.3s;}
    .feature:hover{transform:translateY(-5px);}
    .feature img{width:60px;margin-bottom:15px;}
    .feature h3{color:#007bff;margin-bottom:10px;}
    footer{background:#007bff;color:white;text-align:center;padding:15px;margin-top:50px;}
  </style>
</head>
<body>
  <header>
    <div class="logo">🩺 KLINIK ONLINE</div>
    <nav>
      <a href="home.php">Home</a>
      <a href="layanan.php">Layanan Klinik</a>
      <a href="dokter.php">Dokter</a>
      <a href="#">Apotek</a>
      <a href="#">Kontak</a>
      <a href="#" class="btn-login">Login</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Kesehatan Anda, Prioritas Kami</h1>
      <p>Dapatkan layanan dokter dan apotek terbaik secara online.</p>
      <div class="buttons">
        <a href="layanan.php" class="btn primary">Lihat Layanan</a>
        <a href="#" class="btn secondary">Buat Janji</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="img/home.jpg" alt="Dokter dan pasien">
    </div>
  </section>

  <section class="features">
    <div class="feature">
      <img src="https://cdn-icons-png.flaticon.com/512/3209/3209265.png" alt="Konsultasi">
      <h3>Konsultasi Online</h3>
      <p>Konsultasi langsung dengan dokter dari rumah.</p>
    </div>
    <div class="feature">
      <img src="https://cdn-icons-png.flaticon.com/512/2966/2966484.png" alt="Apotek">
      <h3>Apotek Digital</h3>
      <p>Pesan obat langsung dikirim ke rumah Anda.</p>
    </div>
    <div class="feature">
      <img src="https://cdn-icons-png.flaticon.com/512/2921/2921226.png" alt="Jadwal">
      <h3>Jadwal Dokter</h3>
      <p>Atur jadwal pemeriksaan dengan mudah.</p>
    </div>
  </section>

  <footer>
    <p>© 2025 Klinik Online - Semua Hak Dilindungi</p>
  </footer>
</body>
</html>
