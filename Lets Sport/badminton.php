<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Badminton Page</title>
    <style>
        body {
            background-color: #000; /* Warna hitam */
            color: #000; /* Warna teks putih */
            font-family: Arial, sans-serif; /* Jenis huruf */
            margin: 0; /* Menghapus margin */
            padding: 0; /* Menghapus padding */
        }

        .container {
            width: 1500px;
            margin: 20px auto;
            text-align: center;
        }

        .card {
            background-color: #B9F501; /* Warna card */
            padding: 20px; /* Mengurangi padding */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Bayangan */
            margin-bottom: 20px;
            max-width: 1000px; /* Lebar maksimum kartu */
            margin: 0 auto; /* Posisi tengah */
            display: flex; /* Mengaktifkan flexbox */
            flex-direction: row; /* Menyusun elemen dalam satu baris */
            align-items: center; /* Memusatkan elemen vertikal */
        }

        .card img {
            max-width: 450px; /* Ukuran maksimum gambar */
            margin-right: 20px; /* Memberi jarak antara gambar dan detail */
            transition: transform 0.4s ease-in-out; /* Transisi perubahan gambar */
        }

        .card img:hover {
            transform: scale(1.0); /* Efek zoom saat mouse diarahkan ke gambar */
        }

        .card-info {
            text-align: left;
            flex: 1; /* Menyesuaikan ukuran detail */
        }

        .card-info h2 {
            font-size: 2rem;
            color: #000;
            margin-bottom: 10px;
            padding-bottom: 20px;
        }

        .card-info p {
            color: #000;
            margin: 5px 0;
            font-size: 1rem;
        }

        .icon {
            width: 30px;
            margin-right: 5px;
            vertical-align: middle;
        }

        .stars-icon {
            width: 100px; /* Ukuran ikon bintang */
            margin-right: 5px;
            vertical-align: middle;
        }

        .button {
            background-color: #000;
            color: #B9F501;
            border: none;
            padding: 5px 20px;
            border-radius: 30px;
            cursor: pointer;
            font-size: 24px;
            margin-top: 10px;
            margin-left: 430px;
        }

        .button:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="card">
            <img id="img1" src="img/badminton1.png" alt="Futsal Court" onmouseover="startInterval('img1', ['img/badminton1.png', 'img/badminton2.png'])" onmouseout="stopInterval()">
            <div class="card-info">
                <h2>Landbouw</h2>
                <p><img src="img/loc.png" alt="Location" class="icon">Jl. Pasir Mulya 3 No.5, RT.01/RW.07, Pasirmulya, Bogor Barat</p>
                <p>40.000/Hour</p>
                <p><img src="img/stars.png" alt="Rating" class="stars-icon"> 4.5/5</p>
                <p>
                    <img src="img/restaurant.png" alt="Restaurant" class="icon">
                    <img src="img/toilet.png" alt="Toilet" class="icon">
                </p>
                <button class="button" onclick="checkIfSignedIn()">Book</button>
            </div>
        </div>
        <br>
        <div class="card">
            <img id="img2" src="img/badminton2.png" alt="Futsal Court" onmouseover="startInterval('img2', ['img/badminton2.png', 'img/badminton1.png'])" onmouseout="stopInterval()">
            <div class="card-info">
                <h2>Gor Iniro</h2>
                <p><img src="img/loc.png" alt="Location" class="icon">Jl. Salak No.1, RT.02/RW.03, Babakan, Kota Bogor</p>
                <p>40.000/Hour</p>
                <p><img src="img/stars.png" alt="Rating" class="stars-icon"> 4.5/5</p>
                <p>
                    <img src="img/restaurant.png" alt="Restaurant" class="icon">
                    <img src="img/toilet.png" alt="Facilities" class="icon">
                </p>
                <button class="button" onclick="checkIfSignedIn()">Book</button>
            </div>
        </div>
    </div>
    <script src="./js/script.js"></script>
    <script>
       var interval;

function startInterval(imageId, images) {
    var index = 0;
    interval = setInterval(function() {
        document.getElementById(imageId).src = images[index];
        index = (index + 1) % images.length;
    }, 2000); // Setiap 4 detik
}

function stopInterval() {
    clearInterval(interval);
};

async function checkIfSignedIn() {
  const response = await fetch('http://localhost:3000/check-auth');
  if (response.ok) {
      window.location.href = './reservation.php';
      return;
  }

  window.location.href = './signin.php'
}

    </script>
</body>
</html>
