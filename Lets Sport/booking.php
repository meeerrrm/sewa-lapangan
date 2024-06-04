<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Page</title>
  <style>
    body {
      background-image: url('./img/rectangle.png'), url('./img/rectangle2.png'); /* Mengatur latar belakang menggunakan gambar */
      background-color: #000000;
      color: #ffffff; /* Mengatur warna teks menjadi putih */
      font-family: Arial, sans-serif;
      margin: 0; /* Menghilangkan margin bawaan dari body */
    }

    .container {
      width: 100%;
      height: 100vh; /* Mengatur tinggi container sesuai dengan tinggi viewport */
      text-align: center;
      border: 10px solid #b9f501; /* Menambahkan garis pinggir dengan warna B9F501 dan ketebalan 10px */
      padding: 20px; /* Menambahkan padding agar konten tidak berdekatan dengan garis pinggir */
      box-sizing: border-box; /* Untuk memastikan bahwa border tidak menambah lebar konten */
      position: relative; /* Menjadikan container sebagai posisi relatif untuk menempatkan gambar */
    }

    h1 {
      font-size: 3rem;
    }

    p {
      font-size: 1.5rem;
      line-height: 1.6;
    }

    .clickable-image img {
      width: 300px; /* Mengatur lebar gambar lebih besar */
      height: auto; /* Mengatur tinggi gambar agar proporsional */
    }

    .basket {
      top: 50%;
      left: 25%; /* Menyesuaikan posisi horizontal */
      transform: translate(-50%, -50%); /* Menggeser gambar ke tengah */
      position: absolute; /* Menjadikan posisi absolut untuk mengatur posisi gambar */
    }

    .futsal {
      top: 50%;
      left: 50%; /* Menyesuaikan posisi horizontal */
      transform: translate(-50%, -50%); /* Menggeser gambar ke tengah */
      position: absolute; /* Menjadikan posisi absolut untuk mengatur posisi gambar */
    }

    .badminton {
      top: 50%;
      left: 75%; /* Menyesuaikan posisi horizontal */
      transform: translate(-50%, -50%); /* Menggeser gambar ke tengah */
      position: absolute; /* Menjadikan posisi absolut untuk mengatur posisi gambar */
    }

    /* Menyesuaikan ukuran background kedua */
    body {
      background-size: auto, 80%; /* Background pertama otomatis, background kedua diatur 50% */
      background-repeat: no-repeat; /* Menghindari pengulangan background */
      background-position: center; /* Posisi background di tengah */
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Menambahkan gambar-gambar yang dapat diklik -->
    <a href="futsal.php" class="futsal clickable-image">
      <img src="./img/futsal.png" alt="Futsal">
    </a>
    <a href="basket.php" class="basket clickable-image">
      <img src="./img/basket.png" alt="Basket">
    </a>
    <a href="badminton.php" class="badminton clickable-image">
      <img src="./img/badminton.png" alt="Badminton">
    </a>
  </div>
</body>
</html>
