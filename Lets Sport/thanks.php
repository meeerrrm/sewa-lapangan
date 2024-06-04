<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Warna latar belakang */
        }

        .container {
            width: 100%;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            color: #333; /* Warna teks */
        }

        img {
            margin-top: 20px; /* Jarak antara judul dan gambar */
            width: 100vw; /* Lebar gambar sesuai dengan lebar viewport */
            max-width: 100%; /* Batasan lebar gambar */
            height: auto; /* Gambar akan menyesuaikan tinggi sesuai lebar */
        }
    </style>
</head>
<body>
    <div class="container">
        <img id="thank-you-image" src="img/thanks.png" alt="Thank You Image">
    </div>

    <script>
        // Fungsi untuk mengarahkan kembali ke halaman index.php setelah 5 detik
        setTimeout(function() {
            window.location.href = "index.php";
        }, 4000); // 5000 milidetik = 5 detik
    </script>
</body>
</html>
