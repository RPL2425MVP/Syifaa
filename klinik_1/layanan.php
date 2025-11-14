<?php
// --- Data layanan klinik (bisa diubah sesuai kebutuhan)
$layanan = [
    [
        "judul" => "Layanan Medis Umum",
        "deskripsi" => "Pemeriksaan kesehatan dasar, konsultasi dokter umum, dan pengobatan penyakit ringan.",
        "gambar" => "https://img.freepik.com/free-photo/doctor-patient-office_23-2147796409.jpg"
    ],
    [
        "judul" => "Layanan Gigi",
        "deskripsi" => "Perawatan gigi seperti tambal, cabut, dan pembersihan karang gigi.",
        "gambar" => "https://img.freepik.com/free-photo/dentist-patient-chair_23-2148745769.jpg"
    ],
    [
        "judul" => "Kesehatan Ibu & Anak",
        "deskripsi" => "Pemeriksaan kehamilan, imunisasi anak, dan konsultasi tumbuh kembang.",
        "gambar" => "https://img.freepik.com/free-photo/female-doctor-examining-baby_23-2149324497.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Klinik</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: #f4f8fb;
        }
        header {
            background-color: #008cba;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        header a {
            color: white;
            text-decoration: none;
            background: #006f9c;
            padding: 8px 15px;
            border-radius: 8px;
            margin-left: 15px;
            font-size: 14px;
        }
        .container {
            width: 90%;
            margin: 30px auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        .card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: scale(1.03);
        }
        .card img {
            width: 100%;
            height: 190px;
            object-fit: cover;
        }
        .card-content {
            padding: 15px;
        }
        .card h3 {
            margin: 0;
            color: #008cba;
        }
        .card p {
            font-size: 14px;
            color: #333;
            margin-top: 8px;
        }
        footer {
            text-align: center;
            background: #008cba;
            color: white;
            padding: 10px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <h2>Klinik Harapan Sehat</h2>
    <a href="home.php">🏠 Kembali ke Home</a>
</header>

<section class="container">
    <?php foreach ($layanan as $item): ?>
        <div class="card">
            <img src="<?= $item['gambar']; ?>" alt="<?= $item['judul']; ?>">
            <div class="card-content">
                <h3><?= $item['judul']; ?></h3>
                <p><?= $item['deskripsi']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<footer>
    <p>© 2025 Klinik Harapan Sehat - Semua Hak Dilindungi</p>
</footer>

</body>
</html>
